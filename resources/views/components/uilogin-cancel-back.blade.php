@props([
    'route'=>'',
    'label'=>'إلغاء وروجوع',
]) 

<div>
    <a href="{{$route}}"  
    {{$attributes->class(['text-decoration-none', ])}} >
   
     {{__("uilogin.$label")}} </a>
</div>