<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Citizen extends Model
{
    use HasFactory;

    // protected $connection = 'mysql_questions';

    protected $table = 'ssn_login_ques_tb';

    protected $primaryKey = 'idc';

    public static function current_user_citizen_idc($idc)
    {

        $currentCitizen = Citizen::where('idc', $idc)->first();


        return $currentCitizen;
    }

    // public  function getCitizenFullNameAttribute() {

    //     return  $this->CI_FIRST_ARB.' '.$this->CI_FATHER_ARB.' '.$this->CI_GRAND_FATHER_ARB.' '.$this->CI_FAMILY_ARB;
    // }

}
