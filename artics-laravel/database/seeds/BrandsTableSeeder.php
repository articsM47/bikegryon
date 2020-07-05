<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BrandsTableSeeder extends Seeder
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
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('brands')->delete();
        DB::table('brands')->insert([
            'shortDescr' => 'Lapierre',
            'longDescr' => "More than a brand, a name",
            'picture' => 'lapierre.png',
            'stand' => 1,
            'created_at' => $this->randDate(),
            'company_id' => 1]
        );
        DB::table('brands')->insert([
            'shortDescr' => 'BMC',
            'longDescr' => "Swiss, Premium, Performance Cycling",
            'picture' => 'bmc.png',
            'stand' => 2,
            'created_at' => $this->randDate(),
            'company_id' => 2]
        );
        DB::table('brands')->insert([
            'shortDescr' => 'Scott',
            'longDescr' => "No shortcuts",
            'picture' => 'scott.png',
            'stand' => 3,
            'created_at' => $this->randDate(),
            'company_id' => 2]
        );
        DB::table('brands')->insert([
            'shortDescr' => 'Merida',
            'longDescr' => "More quality",
            'picture' => 'merida.png',
            'stand' => 4,
            'created_at' => $this->randDate(),
            'company_id' => 3]
        );
        DB::table('brands')->insert([
            'shortDescr' => 'Centurion',
            'longDescr' => "forge ahead",
            'picture' => 'centurion.png',
            'stand' => 4,
            'created_at' => $this->randDate(),
            'company_id' => 3]
        );
        DB::table('brands')->insert([
            'shortDescr' => 'Wilier',
            'longDescr' => "The courage to continue a tradition",
            'picture' => 'wilier.png',
            'stand' => 5,
            'created_at' => $this->randDate(),
            'company_id' => 3]
        );
    }
}
