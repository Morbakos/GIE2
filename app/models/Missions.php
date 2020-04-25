<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Missions extends Model
{

    // Nom de la clé primaire
    public $primaryKey = "idMission";

    // Nom de la table
    public $table = "missions";

    // Désactivation timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idAuteur', 
        'nomMission',
        'dateCreation', 
        'mapMission', 
        'nbreJoueursMin',
        'nbreJoueursMax',
        'typeMission',
        'heureDepart',
        'meteo',
        'terrain',
        'equipement',
        'respawn',
        'allies',
        'hostiles',
        'objMain',
        'objSec',
        'vehicules',
        'infos',
        'briefing',
        'miniature',
        'statut'
    ];

    public function auteurMission()
    {
        return $this->belongsTo('App\models\User');
    }

    public function soiree()
    {
        return $this->hasMany('App\models\Soiree');
    }
}
