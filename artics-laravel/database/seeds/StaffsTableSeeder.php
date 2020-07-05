<?php

use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
     /**
     * Run the migrations.
     *
     * @return void
     */
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
        for ($i = 2; $i <= 6; $i++) {
            DB::table('staffs')->insert([
                'member_id' => $i,
                'description' => $this->randJob()
            ]);
        }
    }
}
