<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class customercontroller extends Controller{

    public function getindex(){

        $id = input::get('id');

        return customer::find('$id');

    }

    public function transactions(){
        return $this->hasmany('tansaction');
    }

    public function getAll(){

        return customer::all();

    }

    public function postindex(){

        if(input::as('first_name','last_name','email')){

            $input = input::all();

            if($input['first_name']==''|| $input['last_name']==''|| $input['email']==''){

                return response::make('you need to fill all of the input fields',400);
            }

            $customer = new Customer;
            $customer->first_name = $input['first_name'];
            $customer->last_name = $input['last_name'];
            $customer->email = $input['email'];

            $customer -> save();
            return $customer;
        } else {

            return response::make('you need to fill all of the input fields');
        }

    }

    public function deleteindex(){

        $id = input::get('id');

        return $id;

    }

}