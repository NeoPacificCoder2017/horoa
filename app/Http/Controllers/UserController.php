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

       return User::all();

       

    }

    /*
    **affiche les information de l'utilisateur
    */
    public function show(){}

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

        return "Félicitation ".request('nom').' '.request('prenom').' votre inscription réussit';
               
    }


}
