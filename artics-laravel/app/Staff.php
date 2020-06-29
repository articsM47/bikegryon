<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    protected $table='staffs';
    protected $fillable=['person_id','description'];
    protected $primaryKey = 'person_id';//The primary key associated with the table
    use SoftDeletes;

    public function person(){
        return $this->belongsTo('App\Person');
    }
}
