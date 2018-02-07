<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeDon extends Model
{
    public $table = "modes_dons";

    protected $guarded = ['_token'];
}
