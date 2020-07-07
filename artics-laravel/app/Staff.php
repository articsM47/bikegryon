<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    protected $table='staffs';
    protected $fillable=['member_id','description'];
    protected $primaryKey = 'member_id';//The primary key associated with the table
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function member(){
        return $this->belongsTo('App\Member');
    }
}
