<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

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
        for ($i = 0;$i < 100;$i++):

        $profiletypeid = rand(1,3);
        

           
            $users [] = [
                'nom' => str_random(6),
                'prenom' => str_random(9),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(30),
                'profile_type_id' => $profiletypeid,
    
            ];

        endfor;

        

        foreach ($users AS $user):


        User::create($user);

        //DB::table('messages')->insert($message);
        endforeach;
    }
}
