<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class Member extends Model
{
    protected $table='members';
    protected $fillable=['name','firstname','birthDay','phone1','phone2','mail1','mail2','comment','psw','address_id', 'role'];
    protected $hidden = ['psw'];
    use SoftDeletes;
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function client(){
        return $this->hasOne('App\Client');
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function staff(){
        return $this->hasOne('App\Staff');
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function companies() {
        return $this->belongsToMany(Company::class);
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function address() {
        return $this->belongsTo('App\Address');
    }


    /**
     * setPswAttribute
     *
     * @param  mixed $psw
     * @return void
     */
    public function setPswAttribute($psw) {
        $this->attributes['psw'] = Hash::make($psw);
    }
}
