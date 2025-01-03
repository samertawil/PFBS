<div>

    <x-slot:crumb>
        <x-breadcrumb  >
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dash font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item"><a href=""  > {{__('PFBS.home page')}} </a></li>
                
            </ul>
        </x-breadcrumb>

    </x-slot:crumb>

    <div>
        @if ($editUserId !== $this->contacts['id'])
            <div class="d-flex align-items-center ">
                <label class="col-form-label mx-5" style="font-weight: 600; width:130px;" for="">
                    {{ __('PFBS.mobile_primary') }} </label>
                <td class=" "> {{ $this->contacts['mobile_primary'] ?? __("PFBS.no data") }} </td>
            </div>

            <div class="d-flex align-items-center ">
                <label class="col-form-label mx-5" style="font-weight: 600; width:130px;"
                    for="">{{ __('PFBS.mobile_secondary') }} </label>
                <td> {{ $this->contacts['mobile_secondary'] ?? __('PFBS.no data')}} </td>
            </div>

            <div class="d-flex align-items-center ">
                <label class="col-form-label mx-5" style="font-weight: 600; width:130px;"
                    for="">{{ __('PFBS.orignal_address') }} </label>
                <td> {{ $this->contacts['orignal_address'] ?? __('PFBS.no data') }} </td>
            </div>

            <div class="d-flex align-items-center ">
                <label class="col-form-label mx-5" style="font-weight: 600; width:130px;"
                    for="">{{ __('PFBS.eviction_address') }} </label>
                <td> {{ $this->contacts['eviction_address'] ?? __('PFBS.no data') }} </td>
            </div>
        @endif



        @if ($editUserId === $this->contacts['id'])
            <label for="" class="col-form-label mx-5"
                style="font-weight: 600;">{{ __('PFBS.mobile_primary') }}</label>
            <x-input wire:model='mobile_primary' name='mobile_primary'></x-input>

            <label for="" class="col-form-label mx-5"
                style="font-weight: 600;">{{ __('PFBS.mobile_secondary') }}</label>
            <x-input wire:model='mobile_secondary' name='mobile_secondary'></x-input>


            <label for="" class="col-form-label mx-5"
                style="font-weight: 600;">{{ __('PFBS.orignal_address') }}</label>

            <x-select wire:model="orignal_address" name='orignal_address' :options="$this->areas->pluck('area_name', 'area_name')"></x-select>

            <label for="" class="col-form-label mx-5"
                style="font-weight: 600;">{{ __('PFBS.eviction_address') }}</label>

            <x-select wire:model="eviction_address" name='eviction_address' :options="$this->areas->pluck('area_name', 'area_name')"></x-select>

             <div class="d-flex m-5">
                <x-button   class="btn-success  "  wire:loading.attr='disabled' wire:click.prevent='update'></x-button>

                <x-button  :label="__('PFBS.cancel_back')"  class="btn-warning  " wire:click.prevent='cancelEdit'></x-button>
    
             </div>

           
           
        @endif


    </div>

    @if ($editUserId !== $this->contacts['id'])
    <div class="d-flex align-items-center ">

    <x-button class="btn-primary" :label="__('PFBS.editOrNew')" edit wire:loading.attr='disabled'
        wire:click.prevent="edit({{ $this->contacts['id'] }})"></x-button>

      <x-tag-a class="btn-warning mx-5" :route="route('home')" :name="__('PFBS.home page')"></x-tag-a>  

    @endif
</div>
</div>
