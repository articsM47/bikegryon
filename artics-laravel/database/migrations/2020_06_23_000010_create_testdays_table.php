<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testdays', function (Blueprint $table) {
            $table->increments('id'); //autoincrement
            $table->date('date');//unique en fct de edition et event, AAAA-MM-JJ
            $table->string('event');
            $table->integer('edition');
            $table->string('schedule')->nullable();//am,pm
            $table->integer('incriptionsMax')->unsigned();
            $table->softDeletes();// timestamp for deletion management
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testdays');
    }
}
