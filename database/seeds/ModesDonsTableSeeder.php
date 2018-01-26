<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\modeDon;

class ModesDonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modedons = [];
        for ($i = 0;$i < 5;$i++):
        

           
            $modedons [] = [
                'nom' => str_random(6),
    
            ];

        endfor;

        

        foreach ($modedons AS $modedon):


        modeDon::create($modedon);

        endforeach;
    }
}
