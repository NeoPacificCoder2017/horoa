<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModeDon;

class ModeDonController extends Controller
{
    /*
    **affiche la liste des modes de don
    */
    public function all() {

        $modedon = modeDon::all();
 
        return view('modedons');
        
 
     }

        /*
    **affiche les information de l'utilisateur
    */
    public function show($modedonId){

        $modedon = modeDon::find($modedonId);


        return view('modedon',["modedon"=>$modedon]);

    }


    /*
    **enregistre un nouveau mode de Don
    */
    public function new(Request $request){

        $input = $request->all();
        dump($input);
        $modedon = new modeDon();

        $modedon->nom = $input['nom'];
        $modedon->save();

        
        return view('modedon-create-confirmation');     
    }

    /*
    **Function Edit
    */
    public function edit($modedonId){
        $modedon = modeDon::find($modedonId);
       
        dump($modedon);
        return view('edit.modedon-form',["modedon" => $modedon]);
    }

    /*
    **met a jour le mode de Don
    */
    public function update(Request $request,$modedonId){

        modeDon::find($modedonId)->update($request->all());
        $modedon = modeDon::find($modedonId);
        $input = $request->all();
        

        $modedon->nom = $request->$input['nom'];

        $modedon->save();

        return view('{modedonId}');


    }

}
