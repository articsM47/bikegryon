<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CompanyPersonTableSeeder extends Seeder
{
    private function randDate() {
        $nbJours = rand(-1000,0);
        return Carbon::now()->addDays($nbJours);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('company_person')->delete();
        for ($i = 7; $i <= 10; $i++) {
            DB::table('company_person')->insert([
                'person_id' => $i,
                'company_id' => rand(1,3),
                'since'=> $this->randDate()
            ]);
        }
    }
}
