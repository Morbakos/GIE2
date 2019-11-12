<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComposanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composantes', function(Blueprint $table)
        {
            $table->increments('idComposante');
            $table->string('nomComposante');
            $table->string('formateur');
            $table->string('responsable');
            $table->string('iconeComposante');

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
        Schema::dropIfExists('composantes');
    }
}
