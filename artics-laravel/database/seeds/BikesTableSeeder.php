<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BikesTableSeeder extends Seeder
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    private function randDate() {
        $nbJours = rand(-365,0);
        return Carbon::now()->addDays($nbJours);
    }
     /**
     * Run the migrations.
     *
     * @return void
     */
    private function randPicture() {
        $nbPicture = rand(1,8);
        $picture = 'bike' . $nbPicture . '.png';
        return $picture;
    }
     /**
     * Run the migrations.
     *
     * @return void
     */
    private function randName() {
        $model = ["Roadmachine", "URS", "Agonist", "Alpenchallenge", "TrailFox"];
        $number =["ONE", "TWO", "THREE", "FOUR"];
        $name = $model[rand(0,count($model)-1)] ." " .  $number[rand(0,count($number)-1)];
        return $name;
    }
     /**
     * Run the migrations.
     *
     * @return void
     */
    private function randDescr() {
        $descr = [
            "Grâce à un support électrique fiable, tu peux te déplacer d'un point A à un point B de manière rapide, flexible et détendue. Même les longues distances ou les excursions à la campagne sont encore plus amusantes !",
            "Que ce soit pour des excursions de loisirs pendant les chaudes journées d'été ou pour le trajet quotidien vers le travail : ce vélo te fera encore plus apprécier le voyage. Grâce à un support électrique fiable, tu peux atteindre n'importe quelle destination rapidement et sans effort.",
            "Ce petit vélo électrique convainc par son moteur central puissant et ses composants de haute qualité. Grâce aux freins à disque, l'e-bike s'arrête rapidement, même à grande vitesse.",
            "Grâce à des pneus de haute qualité et à la fourche à suspension, tu peux te déplacer en toute confiance, même sur les chemins de terre accidentés. De plus, les freins à disque hydrauliques assurent des descentes sûres et contrôlées en terrain raide."];
            return $descr[rand(0,count($descr)-1)];
    }
     /**
     * Run the migrations.
     *
     * @return void
     */
    private function randSign() {
        $number = rand(100,300);
        $sign = "N" . $number;
        return $sign;
    }
     /**
     * Run the migrations.
     *
     * @return void
     */
    private function randFrameSize() {
        $sizes = ["S", "M", "L", "48", "50", "52"];
        $size= $sizes[rand(0,count($sizes)-1)];
        return $size ;
    }
     /**
     * Run the migrations.
     *
     * @return void
     */
    private function FrameUnit($size) {
        if($size==='S' ||$size==='M' || $size==='L'){
            $unit= null;
        }else{
            $unit="cm";
        }
        return $unit;
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    private function randCategory() {
        $cat = ["Montagne", "Gravel", "e-Montagne", "Route", "e-Route"];
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
        for ($i = 1; $i <= 30; $i++) {
            $date=$this->randDate();
            $size=$this->randFrameSize();
            DB::table('bikes')->insert([
                'shortDescr' => $this->randName(),
                'longDescr' => $this->randDescr(),
                'distinctiveSign' => $this->randSign(),
                'picture' => $this->randPicture(),
                'frameSize' => $size,
                'frameUnit' => $this->FrameUnit($size),
                'category' => $this->randCategory(),
                'brand_id'=>rand(1,6),
                'created_at'=>$date,
                'updated_at'=>$date
            ]);
        }
    }
}
