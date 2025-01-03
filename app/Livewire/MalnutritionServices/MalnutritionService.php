<?php

namespace App\Livewire\MalnutritionServices;

use Livewire\Component;
use App\Models\Palusers;
use App\Models\Relatrelation;
use App\Models\MalnutritionApp;
use Livewire\Attributes\Computed;

class MalnutritionService extends Component
{
    public $child_idc; 
    public $child_full_name ;
    public $child_sex ;
    public $child_birthday ;
    public $parent_idc ;
    public $status_id ;
    public $can_delete ;
  
    public function store($id_2) {

        $childData=Palusers::findOrfail($id_2);
        
        MalnutritionApp::create([
            'child_idc'=>$childData->id,
            'child_full_name'=>$childData->FULL_NAME_AR,
            'child_sex'=>$childData->SEX,
            'child_birthday'=>$childData->birth_date,
            'parent_idc'=>session('auth_idc'),
         
        ]);

        
    }
    
    #[Computed()]
    public function relations() {
      return Relatrelation::where('id_1',session('auth_idc'))->where('type_cd',286)
     ->whereNotIn('id_2',$this->childs())->get();

    }

    #[Computed()]
    public function childs() {
        return MalnutritionApp::where('parent_idc',session('auth_idc'))->pluck('child_idc','child_full_name' );
     
    }


    public function destroy($kid_idc) {
       
      MalnutritionApp::where('child_idc',$kid_idc)->delete();
    

    }



        public function render()
    {
      $pageTitle=__('PFBS.MalnutritionApp');
       
        return view('livewire.malnutrition-services.malnutrition-app')->layoutData(['pageTitle'=>$pageTitle]);
    }
}
