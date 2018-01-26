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
            $url ='don' ;
            $method='POST';

            $don = new Don();
            return view('dons.don-form',['don'=>$don,'url'=>$url,'method'=>$method]);
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $don = new Don();
        $don->nom = $input['nom'];
        $don->prenom = $input['prenom'];
        $don->mail = $input['mail'];
        $don->password = $input['password'];
        $don->telephone = $input['telephone'];
        $don->addresse = $input['addresse'];
        $don->don = $input['don'];
        $don->mode_don_id = $input['mode_don_id'];
        $don->date = $input['date'];
        $don->heure = $input['heure'];
        $don->validate = $input['validate'];
        $don->admin_id = $input['admin_id'];
        $don->somme_verse = $input['somme_verse'];
        $don->operation_id = $input['operation_id'];

        $don->save();
        return view('dons.don-create-confirmation');
    }

    public function edit($donId){
        $url ='dons/'.$donId ;
        $method='POST';
        
        $don = Don::find($donId);
        return view('dons.don-form',['don' => $don,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $donId){ 

        Don::find($donId)->update($request->all());
        // $don = Don::find($donId);
        // $input = $request->all();

        // $don->nom = $request->$input['nom'];
        // $don->prenom = $request->$input['prenom'];
        // $don->mail = $request->$input['mail'];
        // $don->password = $request->$input['password'];
        // $don->telephone = $request->$input['telephone'];
        // $don->addresse = $request->$input['addresse'];
        // $don->don = $request->$input['don'];
        // $don->mode_don_id = $request->$input['mode_don_id'];
        // $don->date = $request->$input['date'];
        // $don->heure = $request->$input['heure'];
        // $don->validate = $request->$input['validate'];
        // $don->admin_id = $request->$input['admin_id'];
        // $don->somme_verse = $request->$input['somme_verse'];
        // $don->operation_id = $request->$input['operation_id'];

        // $don->save();
        return view('dons.don-update-confirmation');
    }

}
