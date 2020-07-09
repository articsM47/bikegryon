<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id'); //autoincrement
            $table->string('name');
            $table->string('firstname');
            $table->dateTime('birthDay');
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->text('comment')->nullable();
            $table->string('psw')->nullable();
            $table->string('role')->nullable(); // admin, staff, client, exponent
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
            $table->foreignId('address_id')->constrained()
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
        //Schema::table('members', function(Blueprint $table) {
        //    $table->dropForeign('members_address_id_foreign');
        //});

        Schema::dropIfExists('members');
    }
}
