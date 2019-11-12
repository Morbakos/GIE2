<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComposanteUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composanteuser', function(Blueprint $table)
        {
            $table->increments('idComposanteUser');
            $table->integer('idComposante')->unsigned();
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')
                  ->references('idUser')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->foreign('idComposante')
                ->references('idComposante')
                ->on('composantes')
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
        Schema::dropIfExists('composanteuser');
    }
}
