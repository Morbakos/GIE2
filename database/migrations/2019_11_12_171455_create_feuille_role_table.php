<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeuilleRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feuillerole', function (Blueprint $table) {
            $table->increments('idFeuilleRole');
            $table->string('feuille');
            $table->integer('idParticipant')->unsigned();

            $table->foreign('idParticipant')
                  ->references('idParticipant')
                  ->on('participation')
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
        Schema::table('feuillerole', function(Blueprint $table) {
            $table->dropForeign('feuillerole_idparticipant_foreign');
        });
        Schema::dropIfExists('feuillerole');
    }
}
