<?php

namespace App\Admin\Repositories;

use App\Models\Commit as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Commit extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
