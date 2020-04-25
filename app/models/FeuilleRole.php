<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class FeuilleRole extends Model
{
    // Nom de la clé primaire
    public $primaryKey = "idFeuilleRole";

    // Nom de la table
    public $table = "feuilleRole";

    // Désactivation timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'feuille', 
        'idParticipants'
    ];

    public function participants()
    {
        return $this->hasMany('App\models\Participation');
    }
    
    public function soiree()
    {
        return $this->hasOne('App\models\Soiree');
    }
}
