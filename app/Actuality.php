<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actuality extends Model
{
    protected $fillable = ['id','operation_id','post','date','heure','user_id'];
}
