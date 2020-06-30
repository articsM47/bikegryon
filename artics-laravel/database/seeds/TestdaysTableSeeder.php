<?php

use Illuminate\Database\Seeder;

class TestdaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('testdays')->delete();
        DB::table('testdays')->insert([
            'date' => '2020-10-02',
            'event' => "Bike-Test Gryon",
            'edition' => '12',
            'incriptionsMax' => '300']
        );
        DB::table('testdays')->insert([
            'date' => '2020-10-03',
            'event' => "Bike-Test Gryon",
            'edition' => '12',
            'incriptionsMax' => '300']
        );
        DB::table('testdays')->insert([
            'date' => '2020-10-04',
            'event' => "Bike-Test Gryon",
            'edition' => '12',
            'incriptionsMax' => '300']
        );
    }
}
