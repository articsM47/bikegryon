<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('clients')->delete();
        for ($i = 8; $i <= 30; $i++) {
            DB::table('clients')->insert([
                'person_id' => $i,
            ]);
        }
    }
}
