<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfileType;

class ProfileTypeController extends Controller
{
    public function all(){
        $profilesTypes = ProfileType::all();
        return view('profilestypes.profilestypes',['profilesTypes' => $profilesTypes]);
    }

    public function show($profileTypeId){
        $profileType = ProfileType::find($profileTypeId);
        return view('profilestypes.profiletype',['profileType' => $profileType]);
    }

    public function new(){ 
            $url ='profiletype' ;
            $method='POST';

            $profileType = new ProfileType();
            return view('profilestypes.profiletype-form',['profileType'=>$profileType,'url'=>$url,'method'=>$method]);
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $profileType = new ProfileType();
        $profileType->nom = $input['nom'];

        $profileType->save();
        return view('profilestypes.profiletype-create-confirmation');
    }

    public function edit($profileTypeId){
        $url ='profilestypes/'.$profileTypeId ;
        $method='POST';
        
        $profileType = ProfileType::find($profileTypeId);
        return view('profilestypes.profiletype-form',['profileType' => $profileType,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $profileTypeId){ 

        ProfileType::find($profileTypeId)->update($request->all());

        return view('profilestypes.profiletype-update-confirmation');
    }

    public function destroy($profileTypeId){
        $profileType = ProfileType::find($profileTypeId);
        $profileType->delete();

        return view('profilestypes.profiletype-delete-confirmation');
    }
}
