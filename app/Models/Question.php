<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	use HasDateTimeFormatter;
	protected $table = 'question';
	//和topic的反向一对多关联
	public function Topic()
	{
		return $this->belongsTo('App\Models\Topic');
	}
	//和topic的反向一对多关联
	public function Doctor()
	{
		return $this->belongsTo('App\Models\Doctor');
	}

	public function SetQcountAttribute($value)
	{
		if (empty($value) || $value == 0) {
			$this->attributes['qcount'] = random_int(100, 999);
		}
	}
	public function SetQaddressAttribute($value)
	{
		if (empty($value)) {
			$this->attributes['qaddress'] = "福建";
		}
	}
	public function SetQageAttribute($value)
	{
		if (empty($value) || $value === 0) {
			$this->attributes['qage'] = random_int(18, 40);
		}
	}
}
