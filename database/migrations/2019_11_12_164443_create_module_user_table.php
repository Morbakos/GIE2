<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_user', function(Blueprint $table)
        {
            $table->increments('idModuleUser');
            $table->integer('idUser')->unsigned();
            $table->integer('idModule')->unsigned();

            $table->foreign('idUser')
                  ->references('idUser')
                  ->on('users');

            $table->foreign('idModule')
                ->references('idModule')
                ->on('modules');

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
        Schema::table('module_user', function(Blueprint $table) {
            $table->dropForeign('module_user_iduser_foreign');
            $table->dropForeign('module_user_idmodule_foreign');
        });
        Schema::dropIfExists('module_user');
    }
}
