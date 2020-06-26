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
            $table->integer('id')->unique(); //unique
            $table->integer('code')->unique(); //must be unique
            $table->string('alpha2',2)->unique();
            $table->string('alpha3',3)->unique();
            $table->string('nameFR')->unique();
            $table->string('nameEN')->unique();
            $table->string('nameDE')->unique();
            $table->string('nameIT')->unique();
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
