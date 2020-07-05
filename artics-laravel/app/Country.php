<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table='countries';
    public $incrementing = false;
    public $timestamps=false;
    protected $fillable=['id','code','alpha2','alpha3','nameFR','nameEN','nameDE' ,'nameIT','sortingSequence'];
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function cities() {
        return $this->hasMany('App\City');
    }
}
