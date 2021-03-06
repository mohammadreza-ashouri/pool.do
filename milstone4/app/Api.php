<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    protected $fillable = ['words', 'hash', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
