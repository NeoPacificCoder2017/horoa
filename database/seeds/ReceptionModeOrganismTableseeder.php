<?php

use Illuminate\Database\Seeder;

class ReceptionModeOrganismTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ReceptionModeOrganism::class, 30)->create();
    }
}
