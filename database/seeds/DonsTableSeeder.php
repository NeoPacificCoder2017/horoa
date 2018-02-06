<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Don; 

class DonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $dons = [ ];

        // for($i = 0; $i < 20; $i++) :
        //     $telephone = rand(10000000,12345678);
        //     $don = rand(1,10000000);

        //     $dons [ ]  = [

        //         'nom' => str_random(10),
        //         'prenom' => str_random(10),
        //         'mail' => str_random(10).'@gmail.com',
        //         'password' => str_random(10),
        //         'telephone' => $telephone,
        //         'addresse' => str_random(20),
        //         'don' => $don,
        //         'mode_don_id' => rand(1,10),
        //         'date' => '2000-02-02',
        //         'heure' => '12:12:12',
        //         'validate' => rand(0,1),
        //         'admin_id' => rand(1,3),
        //         'somme_verse' => rand(1,10000),
        //         'operation_id' => rand(1,5)

        //     ];
        // endfor;
        
        // foreach($dons as $don):

        //     Don::create($don);
            
        // endforeach;
        factory(App\Don::class, 30)->create();
    }
}
