<?php

namespace App\Http\Controllers;

use App\UserOrganism;
use Illuminate\Http\Request;

class UserOrganismController extends Controller
{
    
    public function all(){
        $userorganisms = UserOrganism::all();
        return view('userorganisms.userorganisms',['userorganisms' => $userorganisms]);
    }

    public function show($userorganismId){
        $userorganism = UserOrganism::find($userorganismId);
        return view('userorganisms.userorganism',['userorganism' => $userorganism]);
    }

    public function new(){ 
            $url ='userorganisms' ;
            $method='POST';

            $userorganism = new UserOrganism();
            return view('userorganisms.userorganism-form',['userorganism'=>$userorganism,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $userorganism = new UserOrganism();

        $userorganism->user_id = $input['user_id'];
        $userorganism->organism_id = $input['organism_id'];
        $userorganism->credibilite = $input['credibilite'];


        $userorganism->save();
        return view('userorganisms.userorganism-create-confirmation');
    }

    public function edit($userorganismId){
        $url ='userorganisms/'.$userorganismId ;
        $method='POST';
        
        $userorganism = UserOrganism::find($userorganismId);
        return view('userorganisms.userorganism-form',['userorganism' => $userorganism,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $userorganismId){ 

        UserOrganism::find($userorganismId)->update($request->all());
        return view('userorganisms.userorganism-update-confirmation');
    }

    public function destroy($userorganismId){
        $userorganism = UserOrganism::find($userorganismId);
        $userorganism->delete();

        return view('userorganisms.userorganism-delete-confirmation');
    }
}
