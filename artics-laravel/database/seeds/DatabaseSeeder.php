<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CompaniesTableSeeder::class);
         $this->call(BrandsTableSeeder::class);
         $this->call(BikesTableSeeder::class);
         $this->call(TestdaysTableSeeder::class);
         $this->call(AddressesTableSeeder::class);
         $this->call(MembersTableSeeder::class);
         $this->call(StaffsTableSeeder::class);
         $this->call(ClientsTableSeeder::class);
         $this->call(CompanyMemberTableSeeder::class);
         $this->call(ClientTestdayTableSeeder::class);
         /* $this->call(TestsTableSeeder::class); */
    }
}
