<?php

namespace App\Services\Dummy;


use App\Models\KnowledgeSet as Sets;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Database\Eloquent\Collection;

class KnowledgeSet
{
    //TODO change it to factory or facade
    public static function all()
    {
        $data = new Collection();
        $faker = Container::getInstance()->make(Generator::class);
        
        for($it=5; $it>0; --$it) {
            Sets::reguard();
            $data->push($set=Sets::make([
                'title' => $faker->name,
            ]));
            $set->id=$it;
        }

        return $data;
    }

    public static function make()
    {
        return Sets::make();
    }
}
