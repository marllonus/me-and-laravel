<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $data = [];
	    for($it=100; $it>=0; --$it) {
		    $data[]=[
			    'width'=>fake()->randomNumber(3,true),
			    'height'=>fake()->randomNumber(3,true),
			    'elasticity'=>fake()->randomFloat(7,0,1),
			    'stepladder_id'=>random_int(1,30),
		    ];
	    }

	    DB::table('steps')->insert($data);
    }
}
