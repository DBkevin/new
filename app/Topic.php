<?php

namespace App;

use App\baseModel as Model;
use Illuminate\Database\Eloquent\Model as OLDModel;

class Topic extends Model
{
    protected $with = ['news'];
    //反向多对1
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    //1对多关联
    public function news()
    {
        return $this->hasMany('App\News');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
