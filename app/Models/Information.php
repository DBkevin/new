<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
	use HasDateTimeFormatter;   
	//和topic的反向一对多关联
	public function Topic(){
		return $this->belongsTo('App\Models\Topic');
	}
	//和topic的反向一对多关联
	public function Doctor(){
		return $this->belongsTo('App\Models\Doctor');
	}
}
