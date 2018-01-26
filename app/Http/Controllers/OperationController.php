<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;

class OperationController extends Controller
{
    public function all(){
        $operations = Operation::all();
        return view('operations.operations',['operations' => $operations]);
    }

    public function show($operationId){
        $operation = Operation::find($operationId);
        return view('operations.operation',['operation' => $operation]);
    }

    public function new(){ 
            $url ='operations' ;
            $method='POST';
            $etat = 'Nouveau';

            $operation = new Operation();
            return view('operations.operation-form',['operation'=>$operation,'url'=>$url,'method'=>$method,'etat'=>$etat]);
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $operation = new Operation();

        $operation->nom = $input['nom'];
        $operation->date_debut = $input['date_debut'];
        $operation->date_fin = $input['date_fin'];
        $operation->createur_id = $input['createur_id'];
        $operation->total_recolter = $input['total_recolter'];
        $operation->total_promis = $input['total_promis'];

        $operation->save();
        return view('operations.operation-create-confirmation');
    }

    public function edit($operationId){
        $url ='operations/'.$operationId ;
        $method='POST';
        $etat = 'Edition de';
        
        $operation = Operation::find($operationId);
        return view('operations.operation-form',['operation' => $operation,'url'=>$url,'method'=>$method,'etat'=>$etat]);
    }

    public function update(Request $request, $operationId){ 

        Operation::find($operationId)->update($request->all());

        return redirect('operations');
        return back()->with('success','Item created successfully!');
    }

    public function destroy($operationId){
        $operation = Operation::find($operationId);
        $operation->delete();

        return redirect('operations');
    }
}
