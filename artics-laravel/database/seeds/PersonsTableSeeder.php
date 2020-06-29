<?php

use Illuminate\Database\Seeder;
use App\Person;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('persons')->delete();
        //admin & staff
        DB::table('persons')->insert([
            'name' => "Dupont",
            'firstname' => "Pierre",
            'birthDay' => "19801010",
            'phone1' => "+41794398726",
            'email1' => "pierre.dupont@gmail.com",
            'psw' => "password", //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
            'role' => "admin",
            'address_id' => rand(1,20)]
        );
        DB::table('persons')->insert([
            'name' => "Dupont",
            'firstname' => "Emma",
            'birthDay' => "20000115",
            'phone1' => "+41793456789",
            'email1' => "emma.dupont@gmail.com",
            'psw' => "password", //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
            'role' => "staff",
            'address_id' => rand(1,20)]
        );
        DB::table('persons')->insert([
            'name' => "Rapin",
            'firstname' => "Arnaud",
            'birthDay' => "19950824",
            'phone1' => "+41793452467",
            'email1' => "arnaud.rapin@gmail.com",
            'psw' => "password", //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
            'role' => "staff",
            'address_id' => rand(1,20)]
        );
        DB::table('persons')->insert([
            'name' => "Rapin",
            'firstname' => "Marine",
            'birthDay' => "19990603",
            'phone1' => "+41783459834",
            'email1' => "marine.rapin@gmail.com",
            'psw' => "password", //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
            'role' => "staff",
            'address_id' => rand(1,20)]
        );
        DB::table('persons')->insert([
            'name' => "Ducret",
            'firstname' => "Anita",
            'birthDay' => "19691223",
            'phone1' => "+41793450705",
            'email1' => "anita.ducret@gmail.com",
            'psw' => "password", //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
            'role' => "staff",
            'address_id' => rand(1,20)]
        );
        DB::table('persons')->insert([
            'name' => "Bader",
            'firstname' => "Jenny",
            'birthDay' => "20030214",
            'phone1' => "+41778372919",
            'email1' => "jenny.bader@gmail.com",
            'psw' => "password", //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
            'role' => "staff",
            'address_id' => rand(1,20)]
        );
        //exponent
        DB::table('persons')->insert([
            'name' => "Sommer",
            'firstname' => "Alain",
            'birthDay' => "19660607",
            'phone1' => "+41793212223",
            'email1' => "alain.sommer@gmail.com",
            'psw' => "password", //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
            'role' => "exponent",
            'address_id' => rand(1,20)]
        );
        DB::table('persons')->insert([
            'name' => "Meystre",
            'firstname' => "Fred",
            'birthDay' => "19601226",
            'phone1' => "+41773456789",
            'email1' => "fred.meystre@gmail.com",
            'psw' => "password", //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
            'role' => "exponent",
            'address_id' => rand(1,20)]
        );
        DB::table('persons')->insert([
            'name' => "Antonetti",
            'firstname' => "Marco",
            'birthDay' => "19860403",
            'phone1' => "+41794560303",
            'email1' => "marco.antonetti@gmail.com",
            'psw' => "password", //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
            'role' => "exponent",
            'address_id' => rand(1,20)]
        );
        DB::table('persons')->insert([
            'name' => "Ruedi",
            'firstname' => "Pedro",
            'birthDay' => "19901125",
            'phone1' => "+41793999494",
            'email1' => "pedro.ruedi@gmail.com",
            'psw' => "password", //Hash::make($psw), pas utilisé pour l'instant pour avoir accès aux mdp et utiliser les comptes
            'role' => "exponent",
            'address_id' => rand(1,20)]
        );
        factory(Person::class,20)->create();//for the clients
    }
}
