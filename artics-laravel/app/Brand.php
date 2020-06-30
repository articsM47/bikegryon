<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    protected $table='brands';
    protected $fillable=['shortDescr','longDescr','picture','stand','company_id'];
    use SoftDeletes;

    public function company() {          
        return $this->belongsTo('App\Company'); 
    } 

    public function bikes() {          
        return $this->hasMany('App\Bike');  
    }
}
