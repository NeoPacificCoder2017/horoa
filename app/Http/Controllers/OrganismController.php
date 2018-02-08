<?php

namespace App\Http\Controllers;

use App\Organism;
use Illuminate\Http\Request;

class OrganismController extends Controller
{
    
    public function all(){
        $organisms = Organism::all();
        return view('organisms.organisms',['organisms' => $organisms]);
    }

    public function show($organismId){
        $organism = Organism::find($organismId);
        return view('organisms.organism',['organism' => $organism]);
    }

    public function new(){ 
            $url ='organisms' ;
            $method='POST';

            $organism = new Organism();
            return view('organisms.organism-form',['organism'=>$organism,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $organism = new Organism();

        $organism->nom = $input['nom'];
        $organism->telephone = $input['telephone'];
        $organism->mail = $input['mail'];
        $organism->boite_postale = $input['boite_postale'];
        $organism->n_tahiti = $input['n_tahiti'];
        $organism->password = $input['password'];
        $organism->credibilite = $input['credibilite'];

        $organism->save();
        return view('organisms.organism-create-confirmation');
    }

    public function edit($organismId){
        $url ='organisms/'.$organismId ;
        $method='POST';
        
        $organism = Organism::find($organismId);
        return view('organisms.organism-form',['organism' => $organism,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $organismId){ 

        Organism::find($organismId)->update($request->all());
        return view('organisms.organism-update-confirmation');
    }

    public function destroy($organismId){
        $organism = Organism::find($organismId);
        $organism->delete();

        return view('organisms.organism-delete-confirmation');
    }
}
