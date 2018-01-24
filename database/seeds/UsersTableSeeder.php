<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];
        for ($i = 0;$i < 10;$i++)

        $userid = rand(1, 10);
            $validated = rand(0,2);
            $validatedby = ($validated == 0)?0:1;

            $users [] = [



            ];
    }
}
