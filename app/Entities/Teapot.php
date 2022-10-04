<?php

namespace App\Entities;


use App\Entities\Common\AEntity;

class Teapot extends AEntity
{
    protected $containedEntity;

    public function __construct()
    {
        //TODO model
    }

    public function apply(AEntity $thing): ?AEntity
    {
        $model = $thing->getModel();

        if($model->volumes <= $this->getModel()->usable_volume)
            $this->containedEntity = $model;
    }
}
