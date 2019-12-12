<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['user_id','week_id','maths','english','physics','chemistry','biology'];
    public function user(){
        return $this-> belongsTo('App\User');
    }
}
