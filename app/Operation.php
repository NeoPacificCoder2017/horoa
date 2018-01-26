<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
        protected $fillable = ['nom','date_debut','date_fin','createur_id','total_recolter','total_promis'];

}
