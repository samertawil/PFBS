<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relatrelation extends Model
{
   protected $table='relations';

   public function paluser() {
      return $this->hasOne(Palusers::class,'id','id_2');
   }
}