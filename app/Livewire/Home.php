<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserPersonalData;
use Livewire\Attributes\Computed;

class Home extends Component
{
 
    #[Computed()]
    public function contacts()
    {
        return   UserPersonalData::firstWhere('idc', session('auth_idc'));
       
    }

    
    public function render()
    {
        $title =__('uilogin.hosbital name');
        $pageTitle =__('uilogin.home page');
        return view('livewire.home')->layoutData(['title'=>$title,'pageTitle'=>$pageTitle]);
    }
}
