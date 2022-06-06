<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'topic';
    

	//category的一对多反向关联
	public function Category(){
		return $this->belongsTo('App\Models\Category');
	}
	
	public function Info(){
		return $this->hasOne('App\Models\Info');
	}
	public function Commit(){
		return $this->hasOne('App\Models\Commit');
	}
	public function  Intodtion(){
		return $this->hasOne('App\Models\Intodtion');
	}
	public function Notice(){
		return $this->hasOne('App\Models\Notice');
	}
}
