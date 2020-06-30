<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bike extends Model
{
    protected $table='bikes';
    protected $fillable=['shortDescr','longDescr','distinctiveSign','picture','frameSize','frameUnit','category','brand_id'];
    use SoftDeletes;

    public function brand() {          
        return $this->belongsTo('App\Brand'); 
    } 

    public function tests() {          
        return $this->hasMany('App\Test');  
    }
}
