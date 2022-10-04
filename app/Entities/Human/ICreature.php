<?php

namespace App\Entities\Human;


use App\Entities\IMatter;

interface ICreature
{
    public function moveTo(string $direction);

    /**
     * @param IMatter|null $item
     */
    public function pickOne(?IMatter $item): ?IMatter;

    /**
     * @param IMatter|null $item
     * @return IMatter|null
     */
    public function useOn(?IMatter $item): ?IMatter;
}
