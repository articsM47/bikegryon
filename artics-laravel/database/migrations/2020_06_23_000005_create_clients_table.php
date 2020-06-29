<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->primary('person_id');
            $table->string('canton',2)->nullable(); //optional
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
            $table->foreignId('person_id')->constrained()
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
        //Schema::table('clients', function(Blueprint $table) {
        //    $table->dropForeign('person_id');
        //});
        Schema::dropIfExists('clients');
    }
}
