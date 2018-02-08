<?php

namespace App\Http\Controllers;

use App\ReceptionModeOrganism;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptionModeOrganismController extends Controller
{
    
    public function all(){
        // $receptionmodeorganisms = ReceptionModeOrganism::all();
        $receptionmodeorganisms = DB::table('reception_mode_organisms')
        ->join('organisms','organisms.id', '=' ,'reception_mode_organisms.organism_id')
        ->join('reception_modes','reception_modes.id', '=' ,'reception_mode_organisms.reception_mode_id')
        ->select('organisms.nom as organism_id','reception_mode_organisms.reception_mode_id','reception_mode_organisms.iban','reception_mode_organisms.id'
                    ,'reception_modes.title as reception_mode_id')
        ->get();
        return view('receptionmodeorganisms.receptionmodeorganisms',['receptionmodeorganisms' => $receptionmodeorganisms]);
    }

    public function show($receptionmodeorganismId){
        $receptionmodeorganism = ReceptionModeOrganism::find($receptionmodeorganismId);
        return view('receptionmodeorganisms.receptionmodeorganism',['receptionmodeorganism' => $receptionmodeorganism]);
    }

    public function new(){
            $url ='receptionmodeorganisms' ;
            $method='POST';

            $receptionmodeorganism = new ReceptionModeOrganism();
            return view('receptionmodeorganisms.receptionmodeorganism-form',['receptionmodeorganism'=>$receptionmodeorganism,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $receptionmodeorganism = new ReceptionModeOrganism();

        $receptionmodeorganism->reception_mode_id = $input['reception_mode_id'];
        $receptionmodeorganism->organism_id = $input['organism_id'];
        $receptionmodeorganism->iban = $input['iban'];


        $receptionmodeorganism->save();
        return view('receptionmodeorganisms.receptionmodeorganism-create-confirmation');
    }

    public function edit($receptionmodeorganismId){
        $url ='receptionmodeorganisms/'.$receptionmodeorganismId ;
        $method='POST';
        
        $receptionmodeorganism = ReceptionModeOrganism::find($receptionmodeorganismId);
        return view('receptionmodeorganisms.receptionmodeorganism-form',['receptionmodeorganism' => $receptionmodeorganism,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $receptionmodeorganismId){ 

        ReceptionModeOrganism::find($receptionmodeorganismId)->update($request->all());
        return view('receptionmodeorganisms.receptionmodeorganism-update-confirmation');
    }

    public function destroy($receptionmodeorganismId){
        $receptionmodeorganism = ReceptionModeOrganism::find($receptionmodeorganismId);
        $receptionmodeorganism->delete();

        return view('receptionmodeorganisms.receptionmodeorganism-delete-confirmation');
    }
}
