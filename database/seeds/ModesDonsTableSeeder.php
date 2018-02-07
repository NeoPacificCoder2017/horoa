<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\ModeDon;

class ModesDonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modedon = ['virement','cheque','espece'];
        for ($i = 0;$i < 3;$i++):
        
            $modedons [] = [
                'nom' => $modedon[$i],
            ];
        endfor;

        foreach ($modedons AS $modedon):
            ModeDon::create($modedon);
        endforeach;
    }
}
