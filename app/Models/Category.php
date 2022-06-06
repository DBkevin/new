<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'category';
    

	//一对多关联
	public function topics(){
		return $this->hasMany('App\Models\Topic');
	}

}
