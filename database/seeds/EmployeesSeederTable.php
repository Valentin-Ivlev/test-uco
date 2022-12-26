<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EmployeesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Employees');
        for($i = 1 ; $i <= 100 ; $i++){
            DB::table('employees')->insert([
                'username' => $faker->userName(),
                'name' => $faker->name(),
                'email' => $faker->email()
            ]);
        }
    }
}
