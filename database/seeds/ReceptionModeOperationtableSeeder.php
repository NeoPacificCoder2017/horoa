<?php

use Illuminate\Database\Seeder;

class ReceptionModeOperationtableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ReceptionModeOperation::class, 30)->create();
    }
}
