<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\userOperation;

class userOperationController extends Controller
{
     /*
    **affiche la liste des modes de don
    */
    public function all() {

        $userOperation = userOperation::all();
 
        return view('useroperations');
        
 
     }
}
