<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

class InsteadImg
{
	const BASHURLPATTERN = '/[\w][\w-]*\.(?:com\.cn|com|cn|co|net|org|gov|cc|biz|info|test)(\/|$)/isU';
	protected $bashURL; //一维度数组,0 就是当前域名
	public $body;
	public  $arr = []; //是二维数组 0是图片地址,1是分离后的域名,可能有多个
	public $is = false;
	public $newPicture = [];
	/*
	$this->arr[1]的结构
	  1 => array:4 [
			0 => "https://cdn-ssl.meb.com/image/2020/07/03/1057394137"
			1 => "https://cdn-ssl.meb.com/image/2020/07/03/1058002863"
			2 => "https://cdn-ssl.meb.com/image/2020/07/03/1059218046"
			3 => "https://cdn-ssl.meb.com/image/2020/07/03/1103136388"
		]
  	*/
	public function __construct($body = null)
	{
		preg_match(self::BASHURLPATTERN, config('app.url'), $this->bashURL); //数组[0]就是
		$this->body = $body;
		$this->getImgUrl();
		foreach ($this->arr[1] as $item) {
			$this->checkImgLinks($item);
		}

	}
	//提取出图片UrlURL 放到$arr 里面
	public function getImgUrl()
	{
		$image_pattern = "/<img.*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/";
		preg_match_all($image_pattern, $this->body, $this->arr);
		if (!empty($this->arr[1])) {
			//循环匹配到的src
			foreach ($this->arr[1] as $src) {
				$src_real = strtok($src, '?'); //分割，去掉请求参数
				$ext = pathinfo($src_real, PATHINFO_EXTENSION); //获取拓展名
				if (in_array($ext, ['jpg', 'jpeg', 'gif', 'png'])) {
					echo $src_real . PHP_EOL;
				}
			}
		}
	}
	//吧图片下载下来 并保存
	public function getImg($url)
	{
		//$url是要下载的图片地址
			if (strpos($url, 'http://') === 0 || strpos($url, 'https://') === 0) {
				$client = new Client();
				$data = $client->request('get', $url);
				if ($data->getStatusCode() === 200) {
					$ContetnType = $data->getHeaders()["Content-Type"];
					$tmp = explode("/", $ContetnType[0]);
					$type = end($tmp);
					$img = $data->getBody()->getContents();
					//拼接成最终的名字
					$dir = "article/" . time() . '_' . Str::random(10) . '.' . $type;
					$result = Storage::disk('admin')->put($dir, $img);
					$newPath = '/storage/' . $dir;
					if ($result) {
						$this->setBody($url, $newPath); //替换body里面的
						$this->newPicture[] = $dir;
						$this->is = true;
					} else {
						$this->is = false;
					}
					
				}
			}
	}
	public function setBody($old, $new)
	{
		$newBody = str_replace($old, $new, $this->body);
		$this->body = $newBody;
	}
	public  function checkImgLinks($url)
	{
		/*
		$tmp的数据结构
		array:2 [
			0 => "meb.com/"
			1 => "/"
		]
		*/
		preg_match(self::BASHURLPATTERN, $url, $tmp);
		
		if ($tmp[0]) { //不为空
			if ($tmp[0] === $this->bashURL[0]) {
				$this->is=true;
				$this->newPicture[]=$url;
				//吧当前的图片加入到newPicture()里面
			} else {
				//不等于,需要下载下来,$url 传递给参数
				$this->getImg($url);
			}
		} else {
			//为空不处理 为空就是没有外链,用的相对路径
				$this->is=true;
				$this->newPicture[]=$url;
		}
	}
}
