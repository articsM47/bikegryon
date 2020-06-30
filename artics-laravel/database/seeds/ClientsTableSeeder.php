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
        for ($i = 11; $i <= 30; $i++) {
            DB::table('clients')->insert([
                'member_id' => $i,
            ]);
        }
    }
}
