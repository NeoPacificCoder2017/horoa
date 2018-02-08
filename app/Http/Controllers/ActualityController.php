<?php

namespace App\Http\Controllers;

use App\Actuality;
use Illuminate\Http\Request;

class ActualityController extends Controller
{
   
    public function all(){
        $actualities = Actuality::all();
        return view('actualities.actualities',['actualities' => $actualities]);
    }

    public function show($actualityId){
        $actuality = Actuality::find($actualityId);
        return view('actualities.actuality',['actuality' => $actuality]);
    }

    public function new(){ 
            $url ='actualities' ;
            $method='POST';

            $actuality = new Actuality();
            return view('actualities.actuality-form',['actuality'=>$actuality,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $actuality = new Actuality();
        $actuality->post = $input['post'];
        $actuality->date = $input['date'];
        $actuality->heure = $input['heure'];
        $actuality->user_id = $input['user_id'];
        $actuality->operation_id = $input['operation_id'];

        $actuality->save();
        return view('actualities.actuality-create-confirmation');
    }

    public function edit($actualityId){
        $url ='actualities/'.$actualityId ;
        $method='POST';
        
        $actuality = Actuality::find($actualityId);
        return view('actualities.actuality-form',['actuality' => $actuality,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $actualityId){ 

        Actuality::find($actualityId)->update($request->all());
        return view('actualities.actuality-update-confirmation');
    }

    public function destroy($actualityId){
        $actuality = Actuality::find($actualityId);
        $actuality->delete();

        return view('actualities.actuality-delete-confirmation');
    }
}
