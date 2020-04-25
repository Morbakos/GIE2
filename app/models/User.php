<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pseudoUser', 
        'emailUser', 
        'passwordUser',
        'idRangUser',
        'avatarUser',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'passwordUser', 'remember_token',
    ];

    public function rang()
    {
        return $this->hasOne('App\models\RangUser');
    }

    public function missions()
    {
        return $this->hasMany('App\models\Missions');
    }

    public function soiree()
    {
        return $this->hasMany('App\models\Soiree');
    }

    public function participation()
    {
        return $this->hasMany('App\models\Participation');
    }

    public function tuto()
    {
        return $this->hasMany('App\models\tuto');
    }

    public function modules()
    {
        return $this->hasMany('App\models\ModuleUser');
    }

    public function composantes()
    {
        return $this->hasMany('App\models\ComposantesUser');
    }
}
