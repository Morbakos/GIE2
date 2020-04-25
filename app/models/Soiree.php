<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Soiree extends Model
{
    // Nom de la clé primaire
    public $primaryKey = "idSoiree";

    // Nom de la table
    public $table = "Soiree";

    // Désactivation timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'leader', 
        'idMission',
        'idFeuilleRoles', 
        'date', 
        'resultat',
        'nbreParticipants',
        'correctionMission'
    ];

    public function mission()
    {
        return $this->hasOne('App\models\Soiree');
    }

    public function roles()
    {
        return $this->hasOne('App\models\User');
    }
}
