<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    protected $table='tests';
    protected $fillable=['review','client_id','testday_id','bike_id'];
    const CREATED_AT = 'startTime'; 
    use SoftDeletes;

    public function bike() {          
        return $this->belongsTo('App\Bike'); 
    }

    public function testday() {          
        return $this->belongsTo('App\Testday'); 
    }

    public function client() {          
        return $this->belongsTo('App\Client'); 
    }
}
