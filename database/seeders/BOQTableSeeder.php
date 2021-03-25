<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use DB;

class BOQTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $materials = [
        	[
	            'material' => 'PVC PIPE DIAMETER',
                'diameter' => 63,
                'unit_of_measurement' => 'mm',
	            'quantity' => 50,
                'linear_meter' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
	            'material' => 'PVC PIPE DIAMETER',
                'diameter' => 90,
                'unit_of_measurement' => 'mm',
	            'quantity' => 20,
                'linear_meter' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
	            'material' => 'PVC PIPE DIAMETER',
                'diameter' => 110,
                'unit_of_measurement' => 'mm',
	            'quantity' => 50,
                'linear_meter' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
	            'material' => 'PVC PIPE DIAMETER',
                'diameter' => 160,
                'unit_of_measurement' => 'mm',
	            'quantity' => 10,
                'linear_meter' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
	            'material' => 'PPR PIPE DIAMETER',
                'diameter' => 32,
                'unit_of_measurement' => 'mm',
	            'quantity' => 846,
                'linear_meter' => 4,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
	            'material' => 'PPR PIPE DIAMETER',
                'diameter' => 50,
                'unit_of_measurement' => 'mm',
	            'quantity' => 334,
                'linear_meter' => 4,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
	            'material' => 'PPR PIPE DIAMETER',
                'diameter' => 75,
                'unit_of_measurement' => 'mm',
	            'quantity' => 33,
                'linear_meter' => 4,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        foreach ($materials as $boq) {
        	DB::table('boq')->insert($boq);
        }
    }
}
