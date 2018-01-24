<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\ProfileType;

class ProfileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profilesTypes = [ ];
        
        for($i = 0; $i < 3; $i++) :
            $profilesTypes [ ]  = [
                'nom' => str_random(10)
            ];
        endfor;
        
        foreach($profilesTypes as $profileType):

            ProfileType::create($profileType);
            
        endforeach;
    }
}
