<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->primary('id');
            $table->integer('postalCode');//must be unique for a country
            $table->string('cityName');
            $table->string('canton',2)->nullable();
            $table->foreignId('country_id')->constrained()
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Pas supporté par sqlite
        //Schema::table('cities', function(Blueprint $table) {
        //    $table->dropForeign('cities_country_id_foreign');
        //});

        Schema::dropIfExists('cities');
    }
}
