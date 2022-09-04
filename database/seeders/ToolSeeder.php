<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Strings\ToolStatus;
use Illuminate\Support\Facades\DB;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $tools = [];
	    foreach(range(0,15) as $it) {
		    $tools[] = [
			'status' => ToolStatus::from(
				    array_column(ToolStatus::cases(), 'value')[mt_rand(0,2)]
			    ),
			'created_at' => now(),
			'updated_at' => now(),
		    ];
	    }
	    DB::table('tools')->insert($tools);
    }
}
