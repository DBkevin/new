<?php

namespace App\Admin\Controllers;

use Dcat\Admin\Traits\HasUploadedFile;
use Illuminate\Support\Str;
class FileController
{
	use HasUploadedFile;

	public function handle($dir="images")
	{
		$disk = $this->disk();

		// 判断是否是删除文件请求
		if ($this->isDeleteRequest()) {
			// 删除文件并响应
			return $this->deleteFileAndResponse($disk);
		}

		// 获取上传的文件
		$file = $this->file();
		// 获取上传的字段名称
		$column = $this->uploader()->upload_column;

		$newName = $column . '_' . time() . '_' . Str::random(10) . '.'  . $file->getClientOriginalExtension();
		$result = $disk->putFileAs($dir, $file, $newName);
		$path = "{$dir}/$newName";
		$stragePath='/storage/'.$path;

		return $result
			? $this->responseUploaded($path, $disk->url($stragePath))
			: $this->responseErrorMessage('文件上传失败');
	}
}
