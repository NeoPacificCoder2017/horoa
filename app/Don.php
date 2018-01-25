<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    protected $fillable = ['nom','prenom','mail','password','telephone','addresse','don','mode_don_id','date','heure','validate','admin_id','somme_verse','operation_id'];
}
