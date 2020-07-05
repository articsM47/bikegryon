<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    protected $table='addresses';
    protected $fillable=['street1','street2','streetNo','poBox','city_id'];
    use SoftDeletes;
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function city() {
        return $this->belongsTo('App\City');
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function persons() {
        return $this->hasMany('App\Member');
    }
}
