<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Don;
use App\Http\Resources\Don as DonResource;

class DonController extends Controller
{

    public function all(){
        $dons = Don::all();
        return view('dons.dons',['dons' => $dons]);
    }

    public function show($donId){
        $don = Don::find($donId);
        return view('dons.don',['don' => $don]);
    }

    public function new(){ 
            $url ='don' ;
            $method='POST';

            $don = new Don();
            return view('dons.don-form',['don'=>$don,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $don = new Don();
        $don->nom = $input['nom'];
        $don->prenom = $input['prenom'];
        $don->mail = $input['mail'];
        $don->password = $input['password'];
        $don->telephone = $input['telephone'];
        $don->addresse = $input['addresse'];
        $don->don = $input['don'];
        $don->mode_don_id = $input['mode_don_id'];
        $don->date = $input['date'];
        $don->heure = $input['heure'];
        $don->validate = $input['validate'];
        $don->admin_id = $input['admin_id'];
        $don->somme_verse = $input['somme_verse'];
        $don->operation_id = $input['operation_id'];

        $don->save();
        return view('dons.don-create-confirmation');
    }

    public function edit($donId){
        $url ='dons/'.$donId ;
        $method='POST';
        
        $don = Don::find($donId);
        return view('dons.don-form',['don' => $don,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $donId){ 

        Don::find($donId)->update($request->all());
        // $don = Don::find($donId);
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
        return view('dons.don-update-confirmation');
    }

    public function destroy($donId){
        $don = Don::find($donId);
        $don->delete();

        return view('dons.don-delete-confirmation');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get don
        $dons = Don::paginate(15);

        // return collection of don as a resource
        return DonResource::collection($dons);
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
            $don = $request ->isMethod('put') ? Don::findOrfail($request->don_id):new Don;

            $don->id = $request->input('don_id');
            $don->nom = $request->input('nom');
            $don->prenom = $request->input('prenom');
            $don->mail = $request->input('mail');
            $don->password = $request->input('password');
            $don->telephone = $request->input('telephone');
            $don->addresse = $request->input('addresse');
            $don->don = $request->input('don');
            $don->mode_don_id = $request->input('mode_don_id');
            $don->date = $request->input('date');
            $don->heure = $request->input('heure');
            $don->validate = $request->input('validate');
            $don->admin_id = $request->input('admin_id');
            $don->somme_verse = $request->input('somme_verse');
            $don->operation_id = $request->input('operation_id');

        if($don->save()){
            return new DonResource($don);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Don  $don
     * @return \Illuminate\Http\Response
     */
    public function showDon($id)
    {
        // Get don
        $don = Don::findOrFail($id);

        // return single don from a resource
        return new DonResource($don);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Don  $don
     * @return \Illuminate\Http\Response
     */
    public function destroyDon($id)
    {
        // Get don
        $don = Don::findOrFail($id);

        if($don->delete()){
            return new DonResource($don);
        }
    }

}
