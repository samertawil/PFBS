<?php

namespace App\Livewire\DateLogin;

use App\Models\User;
use App\Models\Citizen;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\UserPersonalData;


class Questions extends Component
{
    public $answer_q1;
    public $answer_q2;

    public function store() {
       
        if(   session('answer_q1')==$this->answer_q1 &&  session('answer_q2')==$this->answer_q2) {

            $contactData=UserPersonalData::firstWhere('idc', session('idc'));

            if(! $contactData) {
                UserPersonalData::create([
                    'idc'=>session('idc'),
                    'full_name'=>session('full_name'),
                ]);
            }
    
            session()->put('auth_idc',session('idc') );
        
            return redirect()->route('home');
    
        } else {
 
          return redirect()->back()->with('message',__('PFBS.wrongAnswer'))->with('type','danger');
        }

      

    }



    #[Layout('components.layouts.uilogin-app')]
    public function render()
    {
     
        return view('livewire.date-login.questions');
    }
}
