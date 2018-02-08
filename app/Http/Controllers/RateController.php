<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    
    public function all(){
        $rates = Rate::all();
        return view('rates.rates',['rates' => $rates]);
    }

    public function show($rateId){
        $rate = Rate::find($rateId);
        return view('rates.rate',['rate' => $rate]);
    }

    public function new(){ 
            $url ='rates' ;
            $method='POST';

            $rate = new Rate();
            return view('rates.rate-form',['rate'=>$rate,'url'=>$url,'method'=>$method]);//on déclare les variable pour etre intercepter dans le formulaire
    }

    public function create(Request $request){ 
        $input = $request->all();
        
        $rate = new Rate();
        $rate->taux = $input['taux'];

        $rate->save();
        return view('rates.rate-create-confirmation');
    }

    public function edit($rateId){
        $url ='rates/'.$rateId ;
        $method='POST';
        
        $rate = Rate::find($rateId);
        return view('rates.rate-form',['rate' => $rate,'url'=>$url,'method'=>$method]);
    }

    public function update(Request $request, $rateId){ 

        Rate::find($rateId)->update($request->all());
        return view('rates.rate-update-confirmation');
    }

    public function destroy($rateId){
        $rate = Rate::find($rateId);
        $rate->delete();

        return view('rates.rate-delete-confirmation');
    }
}
