<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebriefMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debriefmission', function (Blueprint $table) {
            $table->increments('idDebrief');
            $table->text('debriefingMission');
            $table->enum('ambiance', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']);
            $table->enum('mission', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']);
            $table->enum('performance', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']);
            $table->enum('team', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']);
            $table->enum('lead', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']);
            $table->enum('strat', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']);
            $table->enum('stuff', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']);
            $table->enum('communication', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']);
            $table->enum('organisation', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']);
            $table->enum('dificulte', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']);

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
        Schema::dropIfExists('debriefmission');
    }
}
