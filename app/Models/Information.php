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
		return random_int(99,999);
	}
	public function Flags(){
		return $this->belongsToMany("App\Models\Flag","flags_foreign","information_id","flag_id");
	}
	public function Users(){
		return $this->belongsToMany("App\Models\Adminuser","adminuser_foreign","information_id","adminuser_id");
	}
}
