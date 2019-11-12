<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutos', function (Blueprint $table) {
            $table->increments('idTuto');
            $table->integer('idAuteur')->unsigned();
            $table->integer('nomTuto');
            $table->integer('contenuTuto');

            $table->foreign('idAuteur')
                  ->references('idUser')
                  ->on('users')
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
        Schema::table('tutos', function(Blueprint $table) {
            $table->dropForeign('tutos_idauteur_foreign');
        });
        Schema::drop('tutos');
    }
}
