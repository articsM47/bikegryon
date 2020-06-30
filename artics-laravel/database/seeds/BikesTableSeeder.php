<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BikesTableSeeder extends Seeder
{
    private function randDate() {
        $nbJours = rand(-365,0);
        return Carbon::now()->addDays($nbJours);
    }
    private function randPicture() {
        $nbPicture = rand(1,8);
        $picture = 'bike' . $nbPicture . '.png';
        return $picture;
    }
    private function randName() {
        $model = ["Roadmachine", "URS", "Agonist", "Alpenchallenge", "TrailFox"];
        $number =["ONE", "TWO", "THREE", "FOUR"];
        $name = $model[rand(0,count($model)-1)] ." " .  $number[rand(0,count($number)-1)];
        return $name;
    }
    private function randDescr() {
        $descr = [
            "Premium Carbon chassis with MTT Technology and D-Shape Carbon seatpost, ICS technology stem and Easton EC70 AX Carbon bar",
            "Premium Carbon chassis, ICS Stem and BMC Carbon Bar, Premium Carbon D-Shape Seatpost",
            "Full Carbon chassis with MTT Technology and D-Shape seatpost, ICS Aero cockpit, Shimano Steps E-8000 Drive Unit",
            "Featuring a carbon front triangle and premium aluminium rear triangle, plus our APS endurance-tuned suspension delivers the pedaling efficiency XC racers seek, while remaining fully active to soak up the terrain trail riders crave."];
        return $descr[rand(0,count($descr)-1)];
    }
    private function randSign() {
        $number = rand(100,300);
        $sign = "N" . $number;
        return $sign;
    }
    private function randFrameSize() {
        $size = ["S", "M", "L", "48", "50", "52"];
        return $size[rand(0,count($size)-1)];
    }

    private function randCategory() {
        $cat = ["VTT", "Gravel", "e-VTT", "Road", "e-Road", "Junior"];
        return $cat[rand(0,count($cat)-1)];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('bikes')->delete();
        for ($i = 1; $i <= 15; $i++) {
            $date=$this->randDate();
            DB::table('bikes')->insert([
                'shortDescr' => $this->randName(),
                'longDescr' => $this->randDescr(),
                'distinctiveSign' => $this->randSign(),
                'picture' => $this->randPicture(),
                'frameSize' => $this->randFrameSize(),
                'frameUnit' => 'cm',
                'category' => $this->randCategory(),
                'brand_id'=>rand(1,6),
                'created_at'=>$date,
                'updated_at'=>$date
            ]);
        }
    }
}
