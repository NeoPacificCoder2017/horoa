<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(DocumentTableSeeder::class);
         $this->call(ActualityTableSeeder::class);
         $this->call(RateTableSeeder::class);
         $this->call(OrganismTableSeeder::class);
    }
}
