<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Don;

class DonController extends Controller
{
    public function all(){
        $dons = Don::all();
        return view('dons.dons',['dons' => $dons]);
    }

    public function show($donId){
        $don = Don::find($donId);
        return view('dons.don',['don' => $don]);
    }

    public function new(){ 
            return view('dons.don-form');
    }

    public function create(Request $request)
    { 
        $input = $request->all();

        $don = new don();
        $don->shipping = $input['nom'];
        $don->shipping = $input['prenom'];
        $don->shipping = $input['mail'];
        $don->shipping = $input['password'];
        $don->shipping = $input['telephone'];
        $don->shipping = $input['addresse'];
        $don->shipping = $input['don'];
        $don->shipping = $input['mode_don_id'];
        $don->shipping = $input['date'];
        $don->shipping = $input['heure'];
        $don->shipping = $input['validate'];
        $don->shipping = $input['admin_id'];
        $don->shipping = $input['somme_verse'];
        $don->shipping = $input['operation_id'];

        $don->save();
    }

    public function edit($donId){
        $don = Don::find($donId);
        // dd($address);
        return view('dons.don-form',['don' => $don]);
    }

}
