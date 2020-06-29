<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{

    private function randPicture() {
        $nbPicture = rand(1,5);
        $picture = 'bike' . $nbPicture . '.png';
        return $picture;
    }

    private function randDate() {
        $nbJours = rand(-2800,0);
        return Carbon::now()->addDays($nbJours);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        for ($i = 1; $i <= 10; $i++) {
            $date=$this->randDate();
            DB::table('products')->insert([
                'shortDescr' => 'Model' . $i,
                'longDescr' => 'Descr' . $i,
                'distinctiveSign' => 'Sign' . $i,
                'picture' => $this->randPicture(),
                'brand_id'=>rand(1,3),
                'created_at'=>$date,
                'updated_at'=>$date
            ]);
        }
    }
}
