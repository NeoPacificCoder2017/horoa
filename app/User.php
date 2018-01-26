<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = "users";

    protected $guarded = ['_token','check-auth'];
}
