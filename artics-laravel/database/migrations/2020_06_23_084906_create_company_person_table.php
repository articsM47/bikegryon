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
            $table->dateTime('since', 8);
            $table->dateTime('until', 8)->nullable();
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
            $table->integer('person_id')->unsigned();//foreign key
            $table->foreignId('person_id')->constrained()
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('company_id')->unsigned();//foreign key
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
