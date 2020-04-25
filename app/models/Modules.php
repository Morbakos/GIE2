<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    // Nom de la clé primaire
    public $primaryKey = "idModule";

    // Nom de la table
    public $table = "modules";

    // Désactivation timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomModule', 
        'iconeModule',
        'formation'
    ];

    public function moduleUser()
    {
        return $this->belongsTo('App\models\ModuleUser');
    }

    public function formation()
    {
        return $this->hasOne('App\models\Formation');
    }

    public function stuff()
    {
        return $this->hasMany('App\models\Stuff');
    }
}
