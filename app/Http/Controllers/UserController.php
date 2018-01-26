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


        return view('user/{userId}',["user"=>$user]);

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

        
        return view('user-create-confirmation');     
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
    **met a jour l'utilisateur
    */
    public function update(Request $request,$userId){

        User::find($userId)->update($request->all());
        $user = User::find($userId);
        $input = $request->all();
        

        $user->nom = $request->$input['nom'];
        $user->prenom= $request->$input['prenom'];
        $user->email= $request->$input['email'];
        $user->password= $request->$input['password'];

        $useroperation->save();

        return view('user-update-confirmation');


    }

      /*
    **Supprime l'utilisateur l'utilisateur
    */
    public function destroy($userId){
        $user = User::find($userId);
        $user->delete();
 
        return view('user-delete-confirmation');
    }

}
