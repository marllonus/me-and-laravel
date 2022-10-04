<?php

namespace App\Entity\Common;

interface IMatter
{
    public function apply(AEntity $thing): ?AEntity;
    public function propagate();
    public function position(): string;
    public function isModified(): bool;
    public function isDestroed(): bool;
}
