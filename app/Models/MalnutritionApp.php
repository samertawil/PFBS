<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MalnutritionApp extends Model
{
    protected $fillable = [
        'child_idc',
        'child_full_name',
        'child_sex',
        'child_birthday',
        'parent_idc',
        'status_id',
        'can_delete',
      
    ];
}
