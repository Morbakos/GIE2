<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DebriefMission extends Model
{
    // Nom de la clé primaire
    public $primaryKey = "idDebrief";

    // Nom de la table
    public $table = "debriefmission";

    // Désactivation timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'debriefingMission', 
        'noteAmbiance',
        'noteMission', 
        'notePerformance', 
        'noteTeam',
        'noteLead',
        'noteStrat',
        'noteStuff',
        'noteCommunication',
        'noteOrganisation',
        'noteDifficulte'
    ];

    public function debrief()
    {
        return $this->hasMany('App\models\Participation');
    }
}
