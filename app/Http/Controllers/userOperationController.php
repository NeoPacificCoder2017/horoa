<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\userOperation;

class userOperationController extends Controller
{
    /*
    **affiche la liste des opération de l'utilisateur
    */
    public function all() {

        $useroperation = userOperation::all();
 
        return view('useroperations');
        
 
     }

     /*
    **affiche les information concernant les opérations de l'utilisateur
    */
    public function show($useroperationId){

        $useroperation = userOperation::find($useroperationId);


        return view('useroperation',["useroperation"=>$useroperation]);

    }

    /*
    **enregistre une nouvelle operation a l'utilisateur
    */
    public function new(Request $request){

        $input = $request->all();
        dump($input);
        $useroperation = new userOperation();

        $useroperation->user_id = $input['user_id'];
        $user->operation_id = $input['operation_id'];
        $user->save();

        
        return view('useroperations');     
    }

    /*
    **Function Edit
    */
    public function edit($useroperationId){
        $useroperation = userOperation::find($useroperationId);
       
        dump($useroperation);
        return view('edit.useroperation-form',["useroperation" => $useroperation]);
    }

    /*
    **met a jour l'operation de l'utilisateur
    */
    public function update(Request $request,$useroperationId){

        userOperation::find($useroperationId)->update($request->all());
        $useroperation = userOperation::find($useroperationId);
        $input = $request->all();
        

        $useroperation->parent_id = $request->$input['parent_id'];

        $useroperation->operation_id = $request->$input['operation_id'];

        $useroperation->save();

        return view('useroperation-update-confirmation');


    }

    /*
    **Supprime l'operation de l'utilisateur
    */
    public function destroy($useroperationId){
        $useroperation = userOperation::find($useroperationId);
        $useroperation->delete();
 
        return view('useroperation-delete-confirmation');
    }



}
