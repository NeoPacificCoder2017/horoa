<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrganism extends Model
{
    protected $fillable = ['user_id','organism_id','credibilite'];
}
