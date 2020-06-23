<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTestdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_testdays', function (Blueprint $table) {
            $table->primary(['client_person_id', 'testday_date', 'testday_event', 'testday_edition']);
            $table->integer('badgeNo');
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
            $table->integer('client_person_id')->unsigned();//foreign key
            $table->foreign('client_person_id')->references('person_id')->on('client')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('testday_date')->unsigned();//foreign key
            $table->foreignId('testday_date')->constrained()
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('testday_event')->unsigned();//foreign key
            $table->foreignId('testday_event')->constrained()
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('testday_edition')->unsigned();//foreign key
            $table->foreignId('testday_edition')->constrained()
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
        //Schema::table('client_testdays', function(Blueprint $table) {
        //    $table->dropForeign(['client_person_id']);
        //    $table->dropForeign(['testday_date']);
        //    $table->dropForeign(['testday_edition']);
        //    $table->dropForeign(['testday_event']);
        // });

        Schema::dropIfExists('client_testdays');
    }
}
