<?php

use Illuminate\Database\Seeder;

class OrganismTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Organism::class, 20)->create();
    }
}
