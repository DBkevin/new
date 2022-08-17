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
	

}
