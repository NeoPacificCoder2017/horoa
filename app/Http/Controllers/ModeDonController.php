<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModeDon;

class ModeDonController extends Controller
{
    public function all(){
        $modesDons = ModeDon::all();
        return view('modesDons.modesdons',['modesDons' => $modesDons]);
    }

    public function show($modeDonId){
        $modeDon = ModeDon::find($modeDonId);
        return view('modesDons.modedon',['modeDon' => $modeDon]);
    }

    public function new(){ 
        $url ='modedons' ;
        $method='POST';

        $modeDon = new ModeDon();
        return view('modesDons.modedon-form',['modeDon'=>$modeDon,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $modeDon = new ModeDon();
        $modeDon->nom = $input['nom'];

        $modeDon->save();
        return view('modesDons.modedon-create-confirmation');
    }

   public function edit($modeDonId){
        $url ='modedons/'.$modeDonId ;
        $method='POST';
        
        $modeDon = ModeDon::find($modeDonId);
        return view('modesDons.modedon-form',['modeDon' => $modeDon,'url'=>$url,'method'=>$method]);
   }

    public function update(Request $request,$modeDonId){

        ModeDon::find($modeDonId)->update($request->all());

        return view('modesDons.modedon-update-confirmation');


    }

    public function destroy($modedonId){
        $modedon = ModeDon::find($modedonId);
        $modedon->delete();

        return view('modesDons.modedon-delete-confirmation');
    }

}
