<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    protected $table='tests';
    protected $fillable=['review','client_id','testday_id','bike_id', 'badgeNo'];
    use SoftDeletes;
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function bike() {
        return $this->belongsTo('App\Bike');
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function testday() {
        return $this->belongsTo('App\Testday');
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function client() {
        return $this->belongsTo('App\Client');
    }
}
