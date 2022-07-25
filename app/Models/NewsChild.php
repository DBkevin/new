<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class NewsChild extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'news_child';
    public $timestamps = false;
    protected $fillable=['title','body'];
    public function News(){
        return $this->belongsTo('App\Models\News');
    }

}
