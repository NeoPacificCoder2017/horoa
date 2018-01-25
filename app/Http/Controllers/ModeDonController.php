<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modeDon;

class ModeDonController extends Controller
{
    /*
    **affiche la liste des modes de don
    */
    public function all() {

        $modedon = ModeDon::all();
 
        return view('modedons');
        
 
     }
}
