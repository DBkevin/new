<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dcat\Admin\Traits\HasDateTimeFormatter;

class Tag extends Model
{
    use HasDateTimeFormatter;
	protected $table = 'tags';
    public $timestamps = false;
}
