<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $users = [
        	[
	            'first_name' => 'John Joshua',
                'middle_name' => 'Alforte',
                'last_name' => 'Jamora',
                'email' => 'jjamora0021@gmail.com',
	            'password' => bcrypt('password'),
                'status' => 'active',
                'user_role' => 'admin',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        foreach ($users as $user) {
        	DB::table('users')->insert($user);
        }
    }
}
