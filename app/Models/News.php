<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use App\Models\NewsChild;
class News extends Model
{
	use HasDateTimeFormatter;
	//和topic的反向一对多关联
	public function Topic()
	{
		return $this->belongsTo('App\Models\Topic');
	}
	public function Child(){
		return $this->hasMany(NewsChild::class,'news_id','id');
	}
}
