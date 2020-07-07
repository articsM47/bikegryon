<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bike extends Model
{
    protected $table='bikes';
    protected $fillable=['shortDescr','longDescr','distinctiveSign','picture','frameSize','frameUnit','category','brand_id'];
    use SoftDeletes;
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function brand() {
        return $this->belongsTo('App\Brand');
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function tests() {
        return $this->hasMany('App\Test');
    }
}
