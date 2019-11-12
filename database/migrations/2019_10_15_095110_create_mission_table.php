<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function(Blueprint $table)
        {
            $table->increments('idMission');
            $table->integer('idAuteur')->unsigned();
            $table->string('nomMission');
            $table->date('dateCreation');
            $table->string('mapMission');
            $table->integer('nbreJoueursMin');
            $table->integer('nbreJoueursMax');
            $table->string('typeMission');
            $table->time('heureDepart');
            $table->string('meteo');
            $table->string('terrain');
            $table->string('equipement');
            $table->integer('respawn');
            $table->string('allies');
            $table->string('hostiles');
            $table->string('objMain');
            $table->string('objSec');
            $table->string('vehicules');
            $table->string('infos');
            $table->text('briefing');
            $table->string('miniature');
            $table->integer('statut');

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
        Schema::table('missions', function(Blueprint $table) {
            $table->dropForeign('missions_idauteur_foreign');
        });
        Schema::dropIfExists('missions');
    }
}
