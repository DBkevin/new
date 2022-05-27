<?php

namespace App\Admin\Repositories;

use App\Models\Info as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Info extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
