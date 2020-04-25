<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ComposanteUser extends Model
{
    // Nom de la clé primaire
    public $primaryKey = "idComposanteUser";

    // Nom de la table
    public $table = "composanteUser";

    // Désactivation timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUser', 
        'idComposante'
    ];

    public function user()
    {
        return $this->belongsTo('App\models\User');
    }

    public function composante()
    {
        return $this->hasOne('App\models\Composante');
    }
}
