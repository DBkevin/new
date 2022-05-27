<?php

namespace App\Admin\Repositories;

use App\Models\Introtdtion as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Introtdtion extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
