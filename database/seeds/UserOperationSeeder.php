<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\userOperation;

class UserOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useroperations = [];
        for ($i = 0;$i < 10;$i++):
        
            $user_id = rand(1,6);

            $operation_id = rand(1,4);

           
            $useroperations [] = [
                'user_id' => $user_id,
                'operation_id' => $operation_id,
    
            ];

        endfor;

        

        foreach ($useroperations AS $useroperation):


        userOperation::create($useroperation);

        endforeach;
    }
}
