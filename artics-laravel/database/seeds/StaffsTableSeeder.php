<?php

use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
    private function randJob() {
        $job = ["Accueil", "Autre", "Bar", "Information", "Direction"];
        return $job[rand(0,count($job)-1)];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('staffs')->delete();
        DB::table('staffs')->insert([
            'person_id' => 2,
            //'description' => $this->randJob()
        ]);
        /*for ($i = 2; $i <= 6; $i++) {
            DB::table('staffs')->insert([
                'person_id' => $i,
                'description' => $this->randJob()
            ]);
        }*/
    }
}
