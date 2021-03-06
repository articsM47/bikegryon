<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id'); //autoincrement
            $table->string('street1');
            $table->string('street2')->nullable();//optional
            $table->integer('streetNo')->nullable();
            $table->string('poBox')->nullable();
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
            $table->unsignedInteger('city_id');
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
        //Schema::table('brands', function(Blueprint $table) {
        //    $table->dropForeign('addresses_city_id_foreign');
        //});

        Schema::dropIfExists('addresses');
    }
}
