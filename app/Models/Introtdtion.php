<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Introtdtion extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'introtdtion';
    //和topic模型的反向一对一关联T
	public function Topic(){
		return $this->belongsTo('App\Models\Topic');
	}
}
