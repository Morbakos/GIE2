<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    // Nom de la clé primaire
    public $primaryKey = "idStuff";

    // Nom de la table
    public $table = "stuff";

    // Désactivation timestamps
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idModule', 
        'stuff'
    ];

    public function module()
    {
        return $this->hasOne('App\models\Modules');
    }
}
