<?php
/**
 * Created by PhpStorm.
 * User: eleve1
 * Date: 09/01/2018
 * Time: 10:20
 */

class transaction extends eloquenet {

    public function customer(){

        return $this->belongsto('customer');
    }

}