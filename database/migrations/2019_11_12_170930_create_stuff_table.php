<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuff', function (Blueprint $table) {
            $table->increments('idstuff');
            $table->integer('idModule')->unsigned();
            $table->text('stuff');

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
        Schema::table('stuff', function(Blueprint $table) {
            $table->dropForeign('stuff_idmodule_foreign');
        });
        Schema::dropIfExists('stuff');
    }
}
