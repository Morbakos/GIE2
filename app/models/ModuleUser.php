<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ModuleUser extends Model
{
    // Nom de la clé primaire
    public $primaryKey = "idModuleUser";

    // Nom de la table
    public $table = "module_user";

    // Désactivation timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUser', 
        'idModule'
    ];

    public function user()
    {
        return $this->hasMany('App\models\User');
    }

    public function modules()
    {
        return $this->hasMany('App\models\Modules');
    }
}
