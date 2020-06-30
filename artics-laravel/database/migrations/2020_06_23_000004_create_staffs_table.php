<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->primary('member_id');
            $table->string('description')->nullable(); // Accueil, Autre, Bar, Direction, Information
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
            $table->foreignId('member_id')->constrained()
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
        //Schema::table('staffs', function(Blueprint $table) {
        //    $table->dropForeign('staffs_member_id_foreign');
        //});

        Schema::dropIfExists('staffs');
    }
}
