<?php

namespace App\Livewire\DateLogin;

use App\Models\User;
use App\Models\Citizen;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Dlogin extends Component
{
    public $idc;
    public $birthdate;
    public $year;
    public $month;
    public $day;

    public function authenticate()
    {
        // dd($this->all());

        // $user =  User::where('idc', $this->idc)->first();

        // if ($user) {

        //     if ($user->birthdate == $this->birthdate) {
        //         session([
        //             'auth_idc' => $user->idc,
        //             'full_name' => $user->full_name,

        //         ]);

        //         return redirect()->route('home');
        //     } else {
                 
        //         $this->addError('birthdate', __('PFBS.wrong_birthdat'));

        //         return;
        //     }
        // }

        $citizen = Citizen::current_user_citizen_idc($this->idc);


        if ($citizen) {
       
            $this->birthdate=$this->year.'-'.$this->month.'-'.$this->day;

            if (($citizen->CI_BIRTH_DT ==  $this->birthdate)) {

                session([
                    'idc' => $citizen->idc,
                    'full_name' => $citizen->CI_FIRST_ARB . ' ' . $citizen->CI_FATHER_ARB . ' ' . $citizen->CI_GRAND_FATHER_ARB . ' ' . $citizen->CI_FAMILY_ARB,
                    'q1' => $citizen->q1,
                    'q2' => $citizen->q2,
                    'answer_q1' => $citizen->answer_q1,
                    'answer_q2' => $citizen->answer_q2,
                    'birthdate' => $citizen->CI_BIRTH_DT,
                ]);

                return redirect()->route('user.verify.questions');
            } else {

                $this->addError('birthdate', __('PFBS.wrong_birthdat'));

                session()->forget('idc');

                return;
            }
        } else {

            $this->addError('idc', __('PFBS.wrong_idc'));

            return;
        }
    }


    #[Layout('components.layouts.uilogin-app')]
    public function render()
    {
        return view('livewire.date-login.dlogin');
    }
}
