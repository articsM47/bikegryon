<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='cities';
    public $incrementing = false;
    public $timestamps=false;
    protected $fillable=['id','postalCode','cityName','canton','country_id'];
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function country() {
        return $this->belongsTo('App\Country');
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function addresses() {
        return $this->hasMany('App\Address');
    }
}
