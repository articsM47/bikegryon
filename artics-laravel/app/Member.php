<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    protected $table='members';
    protected $fillable=['name','firstname','birthDay','phone1','phone2','mail1','mail2','comment','psw','address_id', 'role'];
    protected $hidden = ['psw'];
    use SoftDeletes;

    public function client(){
        return $this->hasOne('App\Client');
    }

    public function staff(){
        return $this->hasOne('App\Staff');
    }

    public function companies() {
        return $this->belongsToMany(Company::class);
    }

    public function address() {
        return $this->belongsTo('App\Address');
    }
}
