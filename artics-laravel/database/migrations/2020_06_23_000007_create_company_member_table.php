<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_member', function (Blueprint $table) {
            $table->primary(['member_id', 'company_id']);
            $table->dateTime('since');
            $table->dateTime('until')->nullable();
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
            $table->foreignId('member_id')->constrained()
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('company_id')->constrained()
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
        //Schema::table('company_member', function(Blueprint $table) {
        //    $table->dropForeign(['member_id']);
        //    $table->dropForeign(['company_id']);
        // });

        Schema::dropIfExists('company_member');
    }
}
