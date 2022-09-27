<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	use HasDateTimeFormatter;
	//和topic的反向一对多关联
	public function Topic()
	{
		return $this->belongsTo('App\Models\Topic');
	}
	public function SetCountAttribute($value)
	{
		if (empty($value)) {
			$this->attributes['count'] = random_int(100, 999);
		}
	}

	//和topic的反向一对多关联
	public function Doctor()
	{
		return $this->belongsTo('App\Models\Doctor');
	}
	//标签多对多关联
	public function Flags(){
		return $this->belongsToMany("App\Models\Flag","flags_foreign","news_id","flag_id");
	}
	public function Users(){
		return $this->belongsToMany("App\Models\Adminuser","adminuser_foreign","news_id","adminuser_id");
	}
}
