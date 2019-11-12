<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoireeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soiree', function (Blueprint $table) {
            $table->increments('idsoiree');
            $table->integer('leader')->unsigned();
            $table->integer('idMission')->unsigned();
            $table->integer('idFeuille')->unsigned();
            $table->date('date');
            $table->boolean('resultat');
            $table->integer('nombreParticipants');
            $table->text('correctionMission')->nullable();

            $table->foreign('leader')
                  ->references('idUser')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->foreign('idMission')
                  ->references('idMission')
                  ->on('missions')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->foreign('idFeuille')
                  ->references('idFeuilleRole')
                  ->on('feuillerole')
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
        Schema::table('soiree', function(Blueprint $table) {
            $table->dropForeign('soiree_leader_foreign');
            $table->dropForeign('soiree_idmission_foreign');
            $table->dropForeign('soiree_idfeuille_foreign');
        });
        Schema::dropIfExists('soiree');
    }
}
