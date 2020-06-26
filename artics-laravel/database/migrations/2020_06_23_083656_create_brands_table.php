<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id'); //autoincrement
            $table->string('shortDescr'); //must be unique for en company
            $table->text('longDescr')->nullable();//optional
            $table->string('picture')->nullable();
            $table->integer('stand')->nullable();
            $table->timestamps();
            $table->softDeletes();// timestamp for deletion management
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
        //Schema::table('brands', function(Blueprint $table) {
        //    $table->dropForeign('brands_company_id_foreign');
        //});
        Schema::dropIfExists('brands');
    }
}
