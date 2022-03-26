<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;


class baseModel extends Model
{

	protected   $casts = [
		'created_at' => 'datetime:Y-m-d H:i:s',
		'updated_at' => 'datetime:Y-m-d H:i:s'
	];
	protected function serializeDate(DateTimeInterface $date)
	{
		return $date->format('Y-m-d H:i:s');
	}
}
