<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testday extends Model
{
    protected $table='testdays';
    protected $fillable=['date','event','edition','schedule','incriptionsMax'];
    public $timestamps = false;

    use SoftDeletes;
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function clients() {
        return $this->belongsToMany(Client::class);
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
