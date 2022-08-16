<?php

namespace App\Services;

ini_set('memory_limit', '600M');
use Fukuball\Jieba\Jieba;
use Fukuball\Jieba\Finalseg;
use Fukuball\Jieba\JiebaAnalyse;
use Illuminate\Support\Str;

class GetKeyAndDescription
{
	private $body;
	private $jieba;
	private $finalseg;
	private $jiebaAnalyse;


	public function __construct($body)
	{
		$this->body = strip_tags(str_replace('&nbsp;', '', $body));
		$this->jieba = new Jieba(array('mode' => 'test', 'dict' => 'samll'));
		$this->finalseg = new Finalseg();
		$this->jiebaAnalyse = new JiebaAnalyse();
		$this->jieba->init();
		$this->finalseg->init();
		
	}
	public function getKey()
	{

		$this->jiebaAnalyse->init();
		$tags = $this->jiebaAnalyse->extractTags($this->body, 10);
		 return implode(',', array_keys($tags));
		
	}
	public function getDescription()
	{
		return Str::limit($this->body,200);
	
	}
}
