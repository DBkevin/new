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
	//标签多对多关联
	public function Flags(){
		return $this->belongsToMany("App\Models\Flag","flags_foreign","question_id","flag_id");
	}
}
