<div>

    @props([
        'route' => '#',
        'label' => '',
        'divlclass'=>'',
        'name'=>'',
        'iclass'=>''
    ])

    

         
<div @class([ ''  ,$divlclass])> 

    <a  href={{$route}}
        {{$attributes->class(['btn btn-md  ',
             ]) }}  >{{$name}}
             @if($iclass)
              <i class="las la-trash"></i>
              @endif
    </a>

</div>
    
</div>



 