<?php

namespace App\Admin\Repositories;

use App\Models\Information as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Information extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
