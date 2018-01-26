<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userOperation extends Model
{
    public $table = "users_operations";
    protected $guarded = ['_token'];
}
