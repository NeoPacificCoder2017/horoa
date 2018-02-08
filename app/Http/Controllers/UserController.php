<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    
    public function all(){
        $users = User::all();
        return view('users.users',['users' => $users]);
    }

    public function show($userId){
        $user = User::find($userId);
        return view('users.user',['user' => $user]);
    }

    public function new(){ 
            $url ='users' ;
            $method='POST';

            $user = new User();
            return view('users.user-form',['user'=>$user,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $user = new User();
        $user->nom = $input['nom'];
        $user->prenom = $input['prenom'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->credibility = $input['credibility'];

        $user->save();
        return view('users.user-create-confirmation');
    }

    public function edit($userId){
        $url ='users/'.$userId ;
        $method='POST';
        
        $user = User::find($userId);
        return view('users.user-form',['user' => $user,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $userId){ 

        User::find($userId)->update($request->all());
        return view('users.user-update-confirmation');
    }

    public function destroy($userId){
        $user = User::find($userId);
        $user->delete();

        return view('users.user-delete-confirmation');
    }

}
