<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pensee extends Model
{
//établir les relations
    public function pensees()
    {
        return $this->hasMany(Pensee::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'text', 'user_id',
    ];
}
