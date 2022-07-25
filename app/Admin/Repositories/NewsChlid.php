<?php

namespace App\Admin\Repositories;

use App\Models\NewsChild as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class NewsChild extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
