<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
	use HasDateTimeFormatter;
	protected $table = 'flag';
	public function News()
	{
		return $this->belongsToMany("App\Models\News", "flags_foreign", "flag_id", "news_id");
	}
	public function Question()
	{
		return $this->belongsToMany("App\Models\News", "flags_foreign", "flag_id", "question_id");
	}
	public function Inforamtion()
	{
		return $this->belongsToMany('App\Models\Information', "flags_foreign", "flag_id", "inforamtion_id");
	}
}
