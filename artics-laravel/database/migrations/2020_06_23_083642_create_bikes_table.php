<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->increments('id'); //autoincrement
            $table->string('shortDescr');
            $table->text('longDescr')->nullable();//optional
            $table->string('distinctiveSign')->nullable();
            $table->string('picture')->nullable();
            $table->string('frameSize')->nullable();
            $table->string('frameUnit')->nullable();
            $table->string('category');
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
            $table->integer('brand_id')->unsigned();//foreign key
            $table->foreignId('brand_id')->constrained()
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
        //Schema::table('bikes', function(Blueprint $table) {
        //    $table->dropForeign('bikes_brand_id_foreign');
        //});
        Schema::dropIfExists('bikes');
    }
}
