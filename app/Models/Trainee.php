<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    function courses(){
        return $this->belongsTo('App\Models\Course');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    //use HasFactory;
}
