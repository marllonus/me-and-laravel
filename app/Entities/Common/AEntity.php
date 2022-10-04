<?php

namespace App\Entities\Common;


use App\Models\Entity;

abstract class AEntity implements IMatter
{
    protected $model;

    public function getModel(): Entity
    {
        return $this->model->entity;
    }

    public function position(): string
    {
        return $this->model->entity->position;
    }

    public function isModified(): bool
    {
        return false;
    }

    public function isDestroed(): bool
    {
        return false;
    }
}
