<div>

    <x-slot:crumb>
        <x-breadcrumb  >
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dash font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item"><a href=""  > {{__('PFBS.home page')}} </a></li>
                
            </ul>
        </x-breadcrumb>

    </x-slot:crumb>

    <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
    
        <div class="card card-custom card-stretch gutter-b">
          
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">{{__('PFBS.childs')}}</h3>
                <div class="card-toolbar">
                     
                </div>
            </div>
    
            <div class="card-body pt-2">
                @forelse ($this->relations as  $data)
                <div class="d-flex align-items-center mb-10">
         
                    <div class="symbol symbol-40 symbol-light-success mr-5">
                        <span class="symbol-label">
                            @if ($data->paluser->SEX== 'ذكر')
                            <img src="{{asset('template-assets/metronic7/media/svg/avatars/009-boy-4.svg')}}" class="h-75 align-self-end"
                            alt=""> 
                            @else
                            <img src="{{asset('template-assets/metronic7/media/svg/avatars/006-girl-3.svg')}}" class="h-75 align-self-end"
                            alt=""> 
                            @endif
                           
                        </span>
                    </div>
               
                    <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                        <a  class="text-dark text-hover-primary mb-1 font-size-lg"> {{ $data->paluser->FULL_NAME_AR }}</a>
                        <span class="text-muted"> {{$data->id_2}}  <span class="mx-3">{{ $data->paluser->SEX }}</span>  <span>{{ myDateStyle1($data->paluser->birth_date) }}</span> </span>
                       
                    </div>

                    <div>
                        <x-button :label="__('PFBS.add to check')" class="btn-primary" wire:click.prevent='store({{ $data->id_2 }})'></x-button>
                    </div>
                 
             
                </div>
     
                @empty
                <p>no data</p>
            @endforelse
       
   
            </div>
     
        </div>
  
    </div>


    <div class="card-header border-0">
        <h3 class="card-title font-weight-bolder text-dark" style="font-size:1.275rem !important;">{{__('PFBS.added to')}}</h3>
        <div class="card-toolbar">
             
        </div>
    </div>

    @forelse ($this->childs as $key=> $data)
        <div class="w-md-50 d-flex justify-content-between align-items-center">
            <a  class="text-dark text-hover-primary mb-1 font-size-lg mx-1"> {{$data }} </a>
            <a  class="text-dark text-hover-primary mb-1 font-size-lg mx-1"> {{$key }} </a>
             
            <x-button :label="__('PFBS.remove from check')" class="btn-danger"
                wire:click.prevent='destroy({{ $data }})'></x-button>
        </div>
    @empty
    <a  class="text-dark text-hover-primary mb-1 font-size-lg mx-1"> {{__('PFBS.no data') }} </a>
    @endforelse

</div>



{{-- <ul class="navi navi-hover">
                                
                       
    <li class="navi-separator mt-3 opacity-70"></li>
    <li class="navi-footer py-4">
        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
            <i class="ki ki-plus icon-sm"></i>
            Add new
        </a>
    </li>
</ul> --}}