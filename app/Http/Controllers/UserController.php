<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

    /*
    **affiche la liste de tous les utilisateurs
    */
    public function all() {

       $user = User::all();

       return view('users');
       

    }

    /*
    **affiche les information de l'utilisateur
    */
    public function show($userId){

        $user = User::find($userId);


        return view('user-view',["user"=>$user]);

    }

    /*
    **enregistre le nouvelle Utilisateurs
    */
    public function new(Request $request){

        $input = $request->all();
        dump($input);
        $user = new User();

        $user->nom = $input['nom'];
        $user->prenom = $input['prenom'];
        $user->email = $input['email'];
        $user->password = $input['password'];

        $user->save();

        
        return view('users');     
    }


    /*
    **Function Edit
    */
    public function edit($userId){
        $user = User::find($userId);
       
        dump($user);
        return view('edit.user-form',["user" => $user]);
    }


    /*
    **modification de l'utilisateur
    */
    // public function update(Request $request, $userId){

    //     $user = User::find($userId);
    //     $user = User::update($userId);

    //     $user = new User();
    //     $user->nom = $request->input['nom'];
    //     $user->prenom = $request->input['prenom'];
    //     $user->email = $request->input['email'];
    //     $user->password = $request->input['password'];

       
    //     $user->save();
         
    //     dump($user);
    //     return view('users/{userId}');
    // }

}
