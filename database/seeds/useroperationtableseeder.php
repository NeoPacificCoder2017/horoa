<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\userOperation;

class UsersOperationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useroperation = [];
        for ($i = 0;$i < 10;$i++):

        $user_id = rand(1,6);
        $operation_id = rand(1,3);
        

           
            $useroperation [] = [
                'user_id' => $user_id,
                'operation_id' => $operation_id,
    
            ];

        endfor;

        

        foreach ($useroperation AS $useroperatio):


        userOperation::create($useroperatio);

        //DB::table('messages')->insert($message);
        endforeach;
    }
}
