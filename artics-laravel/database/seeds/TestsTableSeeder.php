<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestsTableSeeder extends Seeder
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    private function randDay() {
        $day = ["2020-10-02", "2020-10-03", "2020-10-04"];
        return $day[rand(0,count($day)-1)];
    }
     /**
     * Run the migrations.
     *
     * @return void
     */
    private function randTime() {//HH:MM:SS
        $time = ["10:", "11:","12:", "13:","14:", "15:"];
        return $time[rand(0,count($time)-1)];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('tests')->delete();
        for ($i = 1; $i <= 60; $i++) {
            $day=$this->randDay();
            $time=$this->randTime();
            $startTime= $day . " " . $time . "00:00";
            $endTime= $day . " " . $time . "30:00";
            $grade1= rand(0,5);
            $grade2= rand(0,5);
            $grade3= rand(0,5);
            $grade4= rand(0,5);
/*             $json = "review:{
                question1: {
                    about : maneuverability
                    grade: ". $grade1 ."
                }
                question2: {
                    about : brakes
                    grade: ". $grade2 ."
                }
                question3: {
                    about : transmission
                    grade: ". $grade3 ."
                }
                question4: {
                    about : comfort
                    grade: ". $grade4 ."
                }
            }
            "; */
            DB::table('tests')->insert([
                'created_at' => $startTime,
                'endTime' => $endTime,
                /* 'review' => $json, */
                'client_id' => rand(1,20),
                'testday_id' => rand(1,3),
                'bike_id' => rand(1,15)
            ]);
        }
    }
}
