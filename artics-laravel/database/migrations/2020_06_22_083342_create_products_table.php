<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id'); //autoincrémentation
            $table->string('shortDescr');
            $table->text('longDescr')->nullable();//facultatif
            $table->string('distinctiveSign');
            $table->integer('brand_id');//a modifier en clé etrangere
            $table->string('picture')->nullable();
            $table->timestamps();
            $table->softDeletes();//timestamp de gestion des suppresions 
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
        //Schema::table('products', function(Blueprint $table) {
        //    $table->dropForeign('products_id_foreign');
        //});
        Schema::dropIfExists('products');
    }
}
