<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id'); //autoincrement
            $table->dateTime('endTime')->nullable();//optional, AAAA-MM-JJ HH:MM:SS
            $table->json('review')->nullable();
            $table->timestamps();//created_At is the start_time
            $table->softDeletes();// timestamp for deletion management
            // $table->integer('client_member_id')->unsigned();//foreign key, besoin de cette ligne car la suivante est un foreign et non un foreign id
            // $table->foreign('client_member_id')->references('member_id')->on('client')
            //         ->onDelete('cascade')
            //         ->onUpdate('cascade');
            $table->foreignId('client_id')->constrained()
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('testday_id')->constrained()
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('bike_id')->constrained()
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
        //    $table->dropForeign(['client_member_id']);
        //    $table->dropForeign(['testday_date']);
        //    $table->dropForeign(['testday_edition']);
        //    $table->dropForeign(['testday_event']);
        //    $table->dropForeign(['bike_id']);
        // });

        Schema::dropIfExists('tests');
    }
}
