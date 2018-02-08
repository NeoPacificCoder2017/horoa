<?php

use Illuminate\Database\Seeder;

class ReceptionModeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ReceptionMode::class, 30)->create();
    }
}
