<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new Carbon();

        $statuses = ['Active', 'Canceled', 'Suspended', 'Premium'];

        foreach($statuses as $status){

            DB::table('statuses')->insert([
                'status' => $status,
                'created_at' => $now,
                'updated_at' => $now

            ]);
        }
    }
}
