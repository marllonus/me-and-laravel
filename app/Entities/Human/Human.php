<?php

namespace App\Entities;


use App\Entities\Common\AEntity;

class Human extends AEntity implements ICreature
{
    private $thing;

    public function __construct()
    {
        //TODO model
    }

    public function moveTo(string $position)
    {
        $this->getModel()->position = $position;
    }

    public function pickOne(?IMatter $item): ?IMatter
    {
        $this->thing = $item;
    }

    public function useOn(?IMatter $item): ?IMatter
    {
        return $this->thing?->apply($item);
    }
    
    public function apply(AEntity $thing): ?AEntity
    {
        if($thing instanceof static)
            return null;

        return $thing?->apply($this);
    }
}
