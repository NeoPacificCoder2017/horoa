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
        $this->call(ProfileTypeSeeder::class);
        $this->call(DonsTableSeeder::class);
        $this->call(OperationsTableSeeder::class);
    }
}
