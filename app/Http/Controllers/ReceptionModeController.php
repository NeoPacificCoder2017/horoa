<?php

namespace App\Http\Controllers;

use App\ReceptionMode;
use Illuminate\Http\Request;

class ReceptionModeController extends Controller
{
   
    public function all(){
        $receptionmodes = ReceptionMode::all();
        return view('receptionmodes.receptionmodes',['receptionmodes' => $receptionmodes]);
    }

    public function show($receptionmodeId){
        $receptionmode = ReceptionMode::find($receptionmodeId);
        return view('receptionmodes.receptionmode',['receptionmode' => $receptionmode]);
    }

    public function new(){ 
            $url ='receptionmodes' ;
            $method='POST';

            $receptionmode = new ReceptionMode();
            return view('receptionmodes.receptionmode-form',['receptionmode'=>$receptionmode,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $receptionmode = new ReceptionMode();
        $receptionmode->title = $input['title'];

        $receptionmode->save();
        return view('receptionmodes.receptionmode-create-confirmation');
    }

    public function edit($receptionmodeId){
        $url ='receptionmodes/'.$receptionmodeId ;
        $method='POST';
        
        $receptionmode = ReceptionMode::find($receptionmodeId);
        return view('receptionmodes.receptionmode-form',['receptionmode' => $receptionmode,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $receptionmodeId){ 

        ReceptionMode::find($receptionmodeId)->update($request->all());
        return view('receptionmodes.receptionmode-update-confirmation');
    }

    public function destroy($receptionmodeId){
        $receptionmode = ReceptionMode::find($receptionmodeId);
        $receptionmode->delete();

        return view('receptionmodes.receptionmode-delete-confirmation');
    }
}
