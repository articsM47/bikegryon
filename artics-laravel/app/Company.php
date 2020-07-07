<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    protected $table='companies';
    protected $fillable=['name','picture'];
    use SoftDeletes;
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function brands() {
        return $this->hasMany('App\Brand');
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function persons() {
        return $this->belongsToMany(Person::class); //return $this->belongsToMany('App\Motcle.php');
    }
}
