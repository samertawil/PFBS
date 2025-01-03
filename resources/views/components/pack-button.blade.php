@props([
    'type' => '',
    'name' => __('front.save') ,
    'divlclass'=>'',
    'iclass'=>'',
    '$iclassName'=>''
])


<div @class(['my-4 text-left mx-1 ', $divlclass])> 

    <button type="{{ $type }}"
        {{$attributes->class(['btn font-weight-bold btn-sm px-4 font-size-base ml-2 btn-light-warning',
             ]) }}  >{{$name}}
               @if($iclass)
               <i class="{{$iclassName}}"></i>
               @endif
    </button>

</div>

{{-- wire:click.prevent="storeAbility" --}}
{{-- 

<x-button :name="__('uilogin.check')" class="bg-primary text-white"
divlclass="d-grid gap-2"></x-button> --}}
 
 