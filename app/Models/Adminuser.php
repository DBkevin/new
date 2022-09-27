<?php

namespace App\Models;

use Dcat\Admin\Models\Administrator;

class Adminuser extends Administrator
{
	public function News()
	{
		return $this->belongsToMany("App\Models\News", "adminuser_foreign", "adminuser_id", "news_id");
	}
	public function Question()
	{
		return $this->belongsToMany("App\Models\News", "adminuser_foreign", "adminuser_id", "question_id");
	}
	public function Inforamtion()
	{
		return $this->belongsToMany('App\Models\Information', "adminuser_foreign", "adminuser_id", "inforamtion_id");
	}
}
