<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function all() {

       return User::all();

    }

    public function show(){}


    public function new(){}

    // public function create(Request $request){}

    //     $input = $request->all();
    //     dump($input);
    //     $user = new User();

    //     $user->nom = $input['nom'];
    //     $user->prenom = $input['prenom'];
    //     $user->email = $input['email'];
    //     $user->password = $input['password'];

    //     $user->save();



}
