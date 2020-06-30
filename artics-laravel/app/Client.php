<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table='clients';
    protected $fillable=['member_id','canton'];
    protected $primaryKey = 'member_id';//The primary key associated with the table
    use SoftDeletes;

    public function member() {
        return $this->belongsTo('App\Member');
    }

    public function testdays() {
        return $this->belongsToMany(Testday::class); //return $this->belongsToMany('App\Motcle.php');
    }

    public function test() {          
        return $this->hasMany('App\Test');  
    }
}
