<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Behave extends Model
{
    protected $fillable = ['user_id','week_id','behave'];
    public function user(){
        return $this-> belongsTo('App\User');
    }
}
