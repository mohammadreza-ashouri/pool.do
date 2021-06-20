<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = ['finger_print', 'signature_data', 'ppk', 'status', 'user_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
