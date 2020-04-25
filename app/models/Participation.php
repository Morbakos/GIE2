<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Joueurs extends Model
{
    // Nom de la clé primaire
    public $primary = "idParticipant";

    // Nom de la table 
    public $table = "participation";

    // Désactivation timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUser', 
        'equipe',
        'role', 
        'grade', 
        'idDebrief',
    ];

    public function auteur()
    {
        return $this->belongsTo('App\models\User');
    }

    public function debrief()
    {
        return $this->belongsTo('App\models\DebriefMission');
    }

    public function role() {
        return $this->belongsTo('App\models\FeuilleRole');
    }
}
