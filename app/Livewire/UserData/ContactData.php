<?php

namespace App\Livewire\UserData;

use App\Models\AidArea;
use Livewire\Component;
use App\Traits\FlashMsgTraits;
use App\Models\UserPersonalData;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;

class ContactData extends Component
{

   use FlashMsgTraits;

    public $editUserId;
    #[Validate(['required','numeric','digits_between:10,15'])]
    public $mobile_primary;
    #[Validate(['nullable','numeric','digits_between:10,15'])]
    public $mobile_secondary;
    #[Validate(['required'])]
    public $orignal_address;
    #[Validate(['required'])]
    public $eviction_address;

    public function edit($id)
    {
        $this->editUserId = $id;
        $data = $this->contacts();

         $this->mobile_primary = $data['mobile_primary'];
         $this->mobile_secondary = $data['mobile_secondary'];
         $this->orignal_address = $data['orignal_address'];
         $this->eviction_address = $data['eviction_address'];

    }

    public function update()
    {
  
        $this->validate();
       $this->contacts()->update([
        'mobile_primary'=>$this->mobile_primary,
        'mobile_secondary'=>$this->mobile_secondary,
        'orignal_address'=>$this->orignal_address,
        'eviction_address'=>$this->eviction_address,
       ]);

       FlashMsgTraits::created();

       $this->cancelEdit();
        
    }


    #[Computed()]
    public function contacts()
    {
        return   UserPersonalData::firstWhere('idc', session('auth_idc'));
       
    }


    #[Computed()]
    public function areas()
    {
        return   AidArea::whereIn('part_id', [1,2,3])->get();
       
    }

    public function cancelEdit()
    {
       
        $this->reset('editUserId');
    }

    public function render()
    {
        
        $title = __('uilogin.contact_data') ;
        $pageTitle =  __('uilogin.contact_data') ;
        return view('livewire.user-data.contact-data')->layoutData(['title'=>$title,'pageTitle' => $pageTitle]);
    }
}
