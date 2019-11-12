<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('idUser');
            $table->string('pseudoUser')->unique();
            $table->string('emailUser')->unique();
            $table->string('passwordUser');
            $table->integer('idRangUser')->unsigned();
            $table->string('avatarUser')->default('/users/avatar/default.jpg');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idRangUser')
                ->references('idRangUser')
                ->on('ranguser')
                ->onUpdate('restrict')
                ->onDelete('restrict');

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
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_idranguser_foreign');
        });
        Schema::drop('users');
    }
}
