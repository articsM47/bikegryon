<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $table='products'; //nom de la table associee a ce model
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['shortDescr', 'longDescr', 'brand_id', 'distinctiveSign', 'picture'];//enlever le brand_id des que c est une fk

    use SoftDeletes; //sert à activer le softdelete car pas par defaut

}
