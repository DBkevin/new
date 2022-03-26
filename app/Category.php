<?php

namespace App;

use App\baseModel;

class Category extends baseModel
{   
   
    // 1对多关联
    public function topics()
    {
        return $this->hasMany('App\Topic');
    }
    
    
   
}
