<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientTestday extends Model
{
    protected $table='client_testday';
    protected $fillable=['badgeNo', 'client_id', 'testday_id'];
    protected $primaryKey = 'client_id'; // eloquent ne supporte pas les clés composites
    use SoftDeletes;

    public function client() {
        return $this->belongsTo('App\Client');
    }
}