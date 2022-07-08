<?php

namespace App\Admin\Repositories;

use App\Models\Doctor as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Doctor extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
