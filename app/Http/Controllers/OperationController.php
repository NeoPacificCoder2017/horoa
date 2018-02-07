<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Operation;
use App\Http\Resources\Operation as OperationResource;

class OperationController extends Controller
{
    public function all(){
        $operations = Operation::all();
        return view('operations.operations',['operations' => $operations]);
    }

    public function show($operationId){
        $operation = Operation::find($operationId)->select()->where();
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

    //=================== Api =======================================

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get operation
        $operations = Operation::paginate(30);

        // return collection of operation as a resource
        return OperationResource::collection($operations);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $operation = $request ->isMethod('put') ? Operation::findOrfail($request->operation_id):new Operation;

        $operation->id = $request->input('operation_id');
        $operation->nom = $request->input('nom');
        $operation->date_debut = $request->input('date_debut');
        $operation->date_fin = $request->input('date_fin');
        $operation->createur_id = $request->input('createur_id') ;
        $operation->total_recolter = $request->input('total_recolter');
        $operation->total_promis = $request->input('total_promis');

        if($operation->save()){
            return new OperationResource($operation);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function showOperation($id)
    {
        // Get operation
        $operation = Operation::findOrFail($id);

        // return single operation from a resource
        return new OperationResource($operation);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function destroyOperation($id)
    {
        // Get operation
        $operation = Operation::findOrFail($id);

        if($operation->delete()){
            return new OperationResource($operation);
        }
    }
}
