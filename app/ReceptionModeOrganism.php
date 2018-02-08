<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceptionModeOrganism extends Model
{
    protected $fillable = ['reception_mode_id','organism_id','iban'];
}
