<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participation', function (Blueprint $table) {
            $table->increments('idparticipant');
            $table->integer('idUser')->unsigned();
            $table->string('equipe');
            $table->string('role');
            $table->string('grade');
            $table->integer('idDebrief')->unsigned();

            $table->foreign('idUser')
                  ->references('idUser')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            
            $table->foreign('idDebrief')
                  ->references('idDebrief')
                  ->on('debriefmission')
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
        Schema::table('participation', function(Blueprint $table) {
            $table->dropForeign('participation_iduser_foreign');
            $table->dropForeign('participation_iddebrief_foreign');
        });
        Schema::dropIfExists('participation');
    }
}
