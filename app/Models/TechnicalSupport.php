<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalSupport extends Model
{
   protected $fillable=[
    'name' ,
    'created_by_idc',
    'mobile',
    'subject',
    'subject_id',
    'issue_description',
   ];
}
