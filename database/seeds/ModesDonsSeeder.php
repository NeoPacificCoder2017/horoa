<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class ModesDonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modedons = ['virement','cheque','espece'];
        for ($i = 0;$i < 5;$i++):
        

           
            $modedons [] = [
                'nom' => $modedons(rand($i)),
            ];

        endfor;

        

        foreach ($modedons AS $modedon):


        ModeDon::create($modedon);

        endforeach;
    }
}
