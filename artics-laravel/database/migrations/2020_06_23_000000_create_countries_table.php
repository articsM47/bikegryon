<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->primary('id');
            $table->bigIncrements('id')->unique();
            $table->integer('code'); //must be unique
            $table->string('alpha2',2);
            $table->string('alpha3',3);
            $table->string('nameFR')->unique();
            $table->string('nameEN');
            $table->string('nameDE');
            $table->string('nameIT');
            $table->integer('sortingSequence');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
