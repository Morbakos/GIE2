<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Composantes extends Model
{
    // Nom de la clé primaire
    public $primaryKey = "idComposante";

    // Nom de la table
    public $table = "composantes";

    // Désactivation timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomComposante', 
        'formateur',
        'responsable', 
        'iconeComposante'
    ];

    public function membres()
    {
        return $this->hasMany('App\models\ComposanteUser');
    }
}
