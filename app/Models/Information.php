<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Information extends Model
{
	use HasDateTimeFormatter;   
	 protected $table = "information";
	//和topic的反向一对多关联
	public function Topic(){
		return $this->belongsTo('App\Models\Topic');
	}
	//和topic的反向一对多关联
	public function Doctor(){
		return $this->belongsTo('App\Models\Doctor');
	}
	public function GetPictureAttribute($value)
	{
		return $value;
		//todo 自动识别前缀
	}
	public function getIntroduceAttribute($value){
		return Str::limit(strip_tags($this->body),120,"...");
	}
	public function getCountAttribute($value){
		return random_int(9999,9999999);
	}
	
}
