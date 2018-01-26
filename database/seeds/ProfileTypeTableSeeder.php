<?php

use Illuminate\Database\Seeder;
use App\ProfileType;

class ProfileTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $profilesTypes = [ ];
        
        $nom = ['super_admin','admin','donnateur','createur'];

        for($i = 0; $i < 4; $i++) :
            $profilesTypes [ ]  = [
                'nom' => $nom[$i]
            ];
        endfor;
        
        foreach($profilesTypes as $profileType):

            ProfileType::create($profileType);
            
        endforeach;
    }
}
