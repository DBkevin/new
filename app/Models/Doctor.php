<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	use HasDateTimeFormatter;
	protected $table = 'doctor';
	public function tags()
	{
		return $this->belongsToMany('App\Models\Topic', 'tags', 'doctor_id', 'topic_id');
	}
	public function Information()
	{
		return $this->hasMany('App\Models\Information');
	}
	public function Question()
	{
		return $this->hasMany('App\Models\Question');
	}
}
