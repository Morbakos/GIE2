<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation', function (Blueprint $table) {
            $table->increments('idFormation');
            $table->integer('idModule')->unsigned();
            $table->text('formation');

            $table->foreign('idModule')
                  ->references('idModule')
                  ->on('modules')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formation', function(Blueprint $table) {
            $table->dropForeign('formation_idmodule_foreign');
        });
        Schema::dropIfExists('formation');
    }
}
