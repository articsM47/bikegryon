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
        Schema::create('test_days', function (Blueprint $table) {
            $table->primary(['edition', 'event', 'date']);
            $table->dateTime('date',8);
            $table->string('event');
            $table->integer('edition');
            $table->string('schedule');//am,pm
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
