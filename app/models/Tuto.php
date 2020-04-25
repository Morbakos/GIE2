<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Tuto extends Model
{
    // Nom de la clé primaire
    public $primaryKey = "idTuto";

    // Nom de la table
    public $table = "tuto";

    // Désactivation timestamps
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idAuteur', 
        'nomTuto',
        'contenuTuto'
    ];

    public function auteurTuto()
    {
        return $this->belongsTo('App\models\User');
    }
}
