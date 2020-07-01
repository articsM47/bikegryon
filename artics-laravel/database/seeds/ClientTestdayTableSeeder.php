<?php

use Illuminate\Database\Seeder;

class ClientTestdayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_testday')->delete();
        $cpt= 1000;
        for ($i = 1; $i <= 20; $i++) {
            $numberDays= rand(1,3);
            for ($j = 1; $j <= $numberDays; $j++){
                $badgeAssigned= rand(0,1);
                if($badgeAssigned==1){
                    $badge = $cpt;
                    $cpt++;
                }else{ $badge= null;
                }
                DB::table('client_testday')->insert([
                    'client_id' => $i,
                    'testday_id' => $j,
                    'badgeNo'=> $badge
                ]);
            }
            
        }
        
    }
}
