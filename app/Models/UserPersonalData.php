<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPersonalData extends Model
{
   protected $table='user_personal_data';
   protected $fillable=['mobile_secondary', 'mobile_primary','orignal_address','eviction_address','idc','full_name'];
   
}
