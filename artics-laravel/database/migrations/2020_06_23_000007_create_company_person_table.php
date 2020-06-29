<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_person', function (Blueprint $table) {
            $table->primary(['person_id', 'company_id']);
            $table->dateTime('since');
            $table->dateTime('until')->nullable();
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
            $table->foreignId('person_id')->constrained()
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
        //Schema::table('company_person', function(Blueprint $table) {
        //    $table->dropForeign(['person_id']);
        //    $table->dropForeign(['company_id']);
        // });

        Schema::dropIfExists('company_person');
    }
}
