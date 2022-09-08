<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StepladderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $data = [];
	    for($it=random_int(3,30); $it>=0; --$it) {
		    $data[] = [
			    'material' => fake()->word(),
			    'color' => fake()->safeColorName(),
			    'max_weight' => fake()->randomNumber(3, false),
		    ];
	    }

	    DB::table('stepladders')->insert($data);
    }
}
