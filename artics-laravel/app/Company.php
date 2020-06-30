<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    protected $table='companies';
    protected $fillable=['name','picture'];
    use SoftDeletes;

    public function brands() {          
        return $this->hasMany('App\Brand');  
    }

    public function persons() {
        return $this->belongsToMany(Person::class); //return $this->belongsToMany('App\Motcle.php');
    }
}
