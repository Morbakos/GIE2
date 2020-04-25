<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
   // Nom de la clé primaire
   public $primaryKey = "idFormation";

   // Nom de la table
   public $table = "formation";

   // Désactivation timestamps
   public $timestamps = false;

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'idModule', 
       'contenuFormation'
   ];

   public function module()
   {
       return $this->hasOne('App\models\Modules');
   }
}
