<?php

namespace App;

use App\baseModel;

class News extends  baseModel
{
    //反向1对多关联
    public function topic(){
        return $this->belongsToMany('App\Topic');
    }
    
}
