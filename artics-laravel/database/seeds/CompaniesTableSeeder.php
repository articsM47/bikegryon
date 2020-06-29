<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CompaniesTableSeeder extends Seeder
{

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
        //DB::table('companies')->delete();

        DB::table('companies')->insert([
            'name' => 'Lapierre',
            'created_at' => $this->randDate(),
            'picture' => 'lapierre.png']
        );

        DB::table('companies')->insert([
            'name' => 'Menoud bike',
            'created_at' => $this->randDate(),
            'picture' => 'menoudBike.png']
        );

        DB::table('companies')->insert([
            'name' => 'Merida',
            'created_at' => $this->randDate(),
            'picture' => 'merida.png']
        );

    }
}
