<?php

namespace App\Http\Controllers;

use App\ReceptionModeOperation;
use Illuminate\Http\Request;

class ReceptionModeOperationController extends Controller
{
    public function all(){
        $receptionmodeoperations = ReceptionModeOperation::all();
        return view('receptionmodeoperations.receptionmodeoperations',['receptionmodeoperations' => $receptionmodeoperations]);
    }

    public function show($receptionmodeoperationId){
        $receptionmodeoperation = ReceptionModeOperation::find($receptionmodeoperationId);
        return view('receptionmodeoperations.receptionmodeoperation',['receptionmodeoperation' => $receptionmodeoperation]);
    }

    public function new(){ 
            $url ='receptionmodeoperations' ;
            $method='POST';

            $receptionmodeoperation = new ReceptionModeOperation();
            return view('receptionmodeoperations.receptionmodeoperation-form',['receptionmodeoperation'=>$receptionmodeoperation,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $receptionmodeoperation = new ReceptionModeOperation();

        $receptionmodeoperation->reception_mode_id = $input['reception_mode_id'];
        $receptionmodeoperation->operation_id = $input['operation_id'];


        $receptionmodeoperation->save();
        return view('receptionmodeoperations.receptionmodeoperation-create-confirmation');
    }

    public function edit($receptionmodeoperationId){
        $url ='receptionmodeoperations/'.$receptionmodeoperationId ;
        $method='POST';
        
        $receptionmodeoperation = ReceptionModeOperation::find($receptionmodeoperationId);
        return view('receptionmodeoperations.receptionmodeoperation-form',['receptionmodeoperation' => $receptionmodeoperation,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $receptionmodeoperationId){ 

        ReceptionModeOperation::find($receptionmodeoperationId)->update($request->all());
        return view('receptionmodeoperations.receptionmodeoperation-update-confirmation');
    }

    public function destroy($receptionmodeoperationId){
        $receptionmodeoperation = ReceptionModeOperation::find($receptionmodeoperationId);
        $receptionmodeoperation->delete();

        return view('receptionmodeoperations.receptionmodeoperation-delete-confirmation');
    }
}
