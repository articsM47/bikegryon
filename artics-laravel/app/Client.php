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

    public function member() {
        return $this->belongsTo('App\Member');
    }

    public function testdays() {
        return $this->belongsToMany(Testday::class);
    }

    public function test() {          
        return $this->hasMany('App\Test');  
    }
}
