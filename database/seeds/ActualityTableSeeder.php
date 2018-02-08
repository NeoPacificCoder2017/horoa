<?php

use Illuminate\Database\Seeder;

class ActualityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Actuality::class, 30)->create();
    }
}
