<?php

use Illuminate\Database\Seeder;

class OperationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $operations = [ ];
        // $start = strtotime("01 January 2015");
        // $end = strtotime("01 January 2016");

        // $start2 = strtotime("01 January 2017");
        // $end2 = strtotime("01 January 2018");

        // $timestamp1 = mt_rand($start,$end);
        // $timestamp2 = mt_rand($start2,$end2);
 

        // for($i = 0; $i < 15; $i++) :

        //     $timestamp1 = mt_rand($start,$end);
        //     $timestamp2 = mt_rand($start2,$end2);
        //     $operations [ ]  = [

        //         'nom' => str_random(10),
        //         'date_debut'=> date("Y-m-d", $timestamp1),
        //         'date_fin'=> date("Y-m-d", $timestamp2),
        //         'createur_id'=> rand(1,9),
        //         'total_recolter'=> rand(1000,10000),
        //         'total_promis'=> rand(1,10000),

        //     ];
        // endfor;
        
        // foreach($operations as $operation):

        //     Operation::create($operation);
            
        // endforeach;
        
        factory(App\Operation::class, 30)->create();

    }
}
