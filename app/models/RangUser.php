<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class RangUser extends Model
{
    // Nom de la clé primaire
    public $primaryKey = "idRangUser";

    // Nom de la table
    public $table = "ranguser";

    // Désactivation timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomRang'
    ];

    public function user()
    {
        return $this->hasMany('App\models\User');
    }

}
