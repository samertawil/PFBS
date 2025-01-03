@props([
    'type' => '',
    'label' => 'حفظ',
    'divlclass'=>'',
    'iclass'=>'',
    '$iclassName'=>''
])


<div @class(['my-4 text-left mx-1 ', $divlclass])> 

    <button type="{{ $type }}"
        {{$attributes->class(['btn btn-md',
             ]) }}  >{{$label}}
               @if($iclass)
               <i class="{{$iclassName}}"></i>
               @endif
    </button>

</div>

{{-- wire:click.prevent="storeAbility" --}}
