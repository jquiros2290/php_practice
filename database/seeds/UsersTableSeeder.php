<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $now = new Carbon();
        $faker = Faker\Factory::create();

        DB::table('users')->insert([
            'name' => $faker->name(),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'status_id'=>1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
