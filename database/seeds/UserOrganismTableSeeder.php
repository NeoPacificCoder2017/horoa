<?php

use Illuminate\Database\Seeder;

class UserOrganismTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserOrganism::class, 30)->create();
    }
}
