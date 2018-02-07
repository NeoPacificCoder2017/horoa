<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class DocumentController extends Controller
{
    public function all(){
        $documents = Document::all();
        return view('documents.documents',['documents' => $documents]);
    }

    public function show($documentId){
        $document = Document::find($documentId);
        return view('documents.document',['document' => $document]);
    }

    public function new(){ 
            $url ='document' ;
            $method='POST';

            $document = new Document();
            return view('documents.document-form',['document'=>$document,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $document = new Document();
        $document->nom = $input['nom'];
        $document->filename = $input['filename'];
        $document->user_id = $input['user_id'];
        $document->operation_id = $input['operation_id'];
        $document->save();

        return view('documents.document-create-confirmation');
    }

    public function edit($documentId){
        $url ='documents/'.$documentId ;
        $method='POST';
        
        $document = Document::find($documentId);
        return view('documents.document-form',['document' => $document,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $documentId){ 

        Document::find($documentId)->update($request->all());
        return view('documents.document-update-confirmation');
    }

    public function destroy($documentId){
        $document = Document::find($documentId);
        $document->delete();

        return view('documents.document-delete-confirmation');
    }

    //===================================================
    //                                                                                                          //
    //                                               Api                                                      //
    //                                                                                                          //
    //===================================================

}
