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
            //$table->primary('member_id');
            $table->bigIncrements('id'); //autoincrement
            $table->string('canton',2)->nullable(); //optional
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
            $table->foreignId('member_id')->constrained()
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
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
        //    $table->dropForeign('member_id');
        //});
        Schema::dropIfExists('clients');
    }
}
