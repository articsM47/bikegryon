<?php

use Illuminate\Database\Seeder;
use App\Member;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('members')->delete();
        //admin & staff
        DB::table('members')->insert([
            'name' => "Dupont",
            'firstname' => "Pierre",
            'birthDay' => "1980-10-10",
            'phone1' => "+41794398726",
            'email1' => "pierre.dupont@gmail.com",
            'psw' => Hash::make('password'),
            'role' => "admin",
            'address_id' => rand(1,20)]
        );
        DB::table('members')->insert([
            'name' => "Dupont",
            'firstname' => "Emma",
            'birthDay' => "2000-01-15",
            'phone1' => "+41793456789",
            'email1' => "emma.dupont@gmail.com",
            'psw' => Hash::make('password'),
            'role' => "staff",
            'address_id' => rand(1,20)]
        );
        DB::table('members')->insert([
            'name' => "Rapin",
            'firstname' => "Arnaud",
            'birthDay' => "1995-08-24",
            'phone1' => "+41793452467",
            'email1' => "arnaud.rapin@gmail.com",
            'psw' => Hash::make('password'),
            'role' => "staff",
            'address_id' => rand(1,20)]
        );
        DB::table('members')->insert([
            'name' => "Rapin",
            'firstname' => "Marine",
            'birthDay' => "1999-06-03",
            'phone1' => "+41783459834",
            'email1' => "marine.rapin@gmail.com",
            'psw' => Hash::make('password'),
            'role' => "staff",
            'address_id' => rand(1,20)]
        );
        DB::table('members')->insert([
            'name' => "Ducret",
            'firstname' => "Anita",
            'birthDay' => "1969-12-23",
            'phone1' => "+41793450705",
            'email1' => "anita.ducret@gmail.com",
            'psw' => Hash::make('password'),
            'role' => "staff",
            'address_id' => rand(1,20)]
        );
        DB::table('members')->insert([
            'name' => "Bader",
            'firstname' => "Jenny",
            'birthDay' => "2003-02-14",
            'phone1' => "+41778372919",
            'email1' => "jenny.bader@gmail.com",
            'psw' => Hash::make('password'),
            'role' => "staff",
            'address_id' => rand(1,20)]
        );
        //exponent
        DB::table('members')->insert([
            'name' => "Sommer",
            'firstname' => "Alain",
            'birthDay' => "1966-06-07",
            'phone1' => "+41793212223",
            'email1' => "alain.sommer@gmail.com",
            'psw' => Hash::make('password'),
            'role' => "exponent",
            'address_id' => rand(1,20)]
        );
        DB::table('members')->insert([
            'name' => "Meystre",
            'firstname' => "Fred",
            'birthDay' => "1960-12-26",
            'phone1' => "+41773456789",
            'email1' => "fred.meystre@gmail.com",
            'psw' => Hash::make('password'),
            'role' => "exponent",
            'address_id' => rand(1,20)]
        );
        DB::table('members')->insert([
            'name' => "Antonetti",
            'firstname' => "Marco",
            'birthDay' => "1986-04-03",
            'phone1' => "+41794560303",
            'email1' => "marco.antonetti@gmail.com",
            'psw' => Hash::make('password'),
            'role' => "exponent",
            'address_id' => rand(1,20)]
        );
        DB::table('members')->insert([
            'name' => "Ruedi",
            'firstname' => "Pedro",
            'birthDay' => "1990-11-25",
            'phone1' => "+41793999494",
            'email1' => "pedro.ruedi@gmail.com",
            'psw' => Hash::make('password'),
            'role' => "exponent",
            'address_id' => rand(1,20)]
        );
        factory(Member::class,20)->create();//for the clients
    }
}
