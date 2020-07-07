<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    protected $table='clients';
    protected $fillable=['member_id','canton'];
    protected $primaryKey = 'id';
    use SoftDeletes;
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function member() {
        return $this->belongsTo('App\Member');
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function testdays() {
        return $this->belongsToMany(Testday::class);
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function test() {
        return $this->hasMany('App\Test');
    }
}
