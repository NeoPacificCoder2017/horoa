<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfileType;

class ProfileTypeController extends Controller
{
    public function all(){
        $profilesTypes = ProfileType::all();
        return view('profilesTypes.profilesTypes',['profilesTypes' => $profilesTypes]);
    }

    public function show($profileTypeId){
        $profileType = ProfileType::find($profileTypeId);
        return view('profilesTypes.profileType',['profileType' => $profileType]);
    }

    public function new(){ 
            $url ='profileType' ;
            $method='POST';

            $profileType = new ProfileType();
            return view('profilesTypes.profileType-form',['profileType'=>$profileType,'url'=>$url,'method'=>$method]);
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $profileType = new ProfileType();
        $profileType->nom = $input['nom'];

        $profileType->save();
        return view('profilesTypes.profileType-create-confirmation');
    }

    public function edit($profileTypeId){
        $url ='profilesTypes/'.$profileTypeId ;
        $method='POST';
        
        $profileType = ProfileType::find($profileTypeId);
        return view('profilesTypes.profileType-form',['profileType' => $profileType,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $profileTypeId){ 

        ProfileType::find($profileTypeId)->update($request->all());

        return view('profilesTypes.profileType-update-confirmation');
    }

    public function destroy($profileTypeId){
        $profileType = ProfileType::find($profileTypeId);
        $profileType->delete();

        return view('profilesTypes.profileType-delete-confirmation');
    }
}
