<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CompanyMemberTableSeeder extends Seeder
{ /**
     * Run the migrations.
     *
     * @return void
     */
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
        //DB::table('company_member')->delete();
        for ($i = 7; $i <= 10; $i++) {
            DB::table('company_member')->insert([
                'member_id' => $i,
                'company_id' => rand(1,3),
                'since'=> $this->randDate()
            ]);
        }
    }
}
