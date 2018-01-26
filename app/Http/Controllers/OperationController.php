<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;

class OperationController extends Controller
{
    public function all(){
        $operations = Don::all();
        return view('operations.operations',['operations' => $operations]);
    }

    public function show($operationId){
        $don = Don::find($operationId);
        return view('operations.operation',['operation' => $operation]);
    }

    public function new(){ 
            $url ='operation' ;
            $method='POST';

            $operation = new Operation();
            return view('operations.operation-form',['operation'=>$operation,'url'=>$url,'method'=>$method]);
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $operation = new Operation();
        $operation->nom = $input['nom'];
        $operation->nom = $input['date_debut'];
        $operation->nom = $input['date_fin'];
        $operation->nom = $input['createur_id'];
        $operation->nom = $input['total_recolter'];
        $operation->nom = $input['total_promis'];

        $operation->save();
        return view('operations.operation-create-confirmation');
    }

    public function edit($operationId){
        $url ='operations/'.$operationId ;
        $method='POST';
        
        $operation = Operation::find($operationId);
        return view('operations.operation-form',['operation' => $operation,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $operationId){ 

        Operation::find($operationId)->update($request->all());
        // $don = Don::find($operationId);
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
        return view('operations.operation-update-confirmation');
    }

    public function destroy($operationId){
        $operation = Operation::find($operationId);
        $operation->delete();

        return view('operations.operation-delete-confirmation');
    }
}
