<div>

    <x-slot:crumb>
        <x-breadcrumb  >
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dash font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item"><a href=""  > {{__('uilogin.home page')}} </a></li>
                
            </ul>
        </x-breadcrumb>

    </x-slot:crumb>

    <div>
        @if ($editUserId !== $this->contacts['id'])
            <div class="d-flex align-items-center ">
                <label class="col-form-label mx-5" style="font-weight: 600; width:130px;" for="">
                    {{ __('uilogin.mobile_primary') }} </label>
                <td class=" "> {{ $this->contacts['mobile_primary'] ?? 'لا يوجد بيانات' }} </td>
            </div>

            <div class="d-flex align-items-center ">
                <label class="col-form-label mx-5" style="font-weight: 600; width:130px;"
                    for="">{{ __('uilogin.mobile_secondary') }} </label>
                <td> {{ $this->contacts['mobile_secondary'] ?? 'لا يوجد بيانات' }} </td>
            </div>

            <div class="d-flex align-items-center ">
                <label class="col-form-label mx-5" style="font-weight: 600; width:130px;"
                    for="">{{ __('uilogin.orignal_address') }} </label>
                <td> {{ $this->contacts['orignal_address'] ?? 'لا يوجد بيانات' }} </td>
            </div>

            <div class="d-flex align-items-center ">
                <label class="col-form-label mx-5" style="font-weight: 600; width:130px;"
                    for="">{{ __('uilogin.eviction_address') }} </label>
                <td> {{ $this->contacts['eviction_address'] ?? 'لا يوجد بيانات' }} </td>
            </div>
        @endif



        @if ($editUserId === $this->contacts['id'])
            <label for="" class="col-form-label mx-5"
                style="font-weight: 600;">{{ __('uilogin.mobile_primary') }}</label>
            <x-input wire:model='mobile_primary' name='mobile_primary'></x-input>

            <label for="" class="col-form-label mx-5"
                style="font-weight: 600;">{{ __('uilogin.mobile_secondary') }}</label>
            <x-input wire:model='mobile_secondary' name='mobile_secondary'></x-input>


            <label for="" class="col-form-label mx-5"
                style="font-weight: 600;">{{ __('uilogin.orignal_address') }}</label>

            <x-select wire:model="orignal_address" name='orignal_address' :options="$this->areas->pluck('area_name', 'area_name')"></x-select>

            <label for="" class="col-form-label mx-5"
                style="font-weight: 600;">{{ __('uilogin.eviction_address') }}</label>

            <x-select wire:model="eviction_address" name='eviction_address' :options="$this->areas->pluck('area_name', 'area_name')"></x-select>

             <div class="d-flex m-5">
                <x-button   class="btn-success  "  wire:loading.attr='disabled' wire:click.prevent='update'></x-button>

                <x-button  :name="__('uilogin.cancel_back')"  class="btn-warning  " wire:click.prevent='cancelEdit'></x-button>
    
             </div>

           
           
        @endif


    </div>

    @if ($editUserId !== $this->contacts['id'])
    <div class="d-flex align-items-center ">

    <x-button class="btn-primary" :name="__('uilogin.editOrNew')" edit wire:loading.attr='disabled'
        wire:click.prevent="edit({{ $this->contacts['id'] }})"></x-button>

      <x-tag-a class="btn-warning mx-5" :route="route('home')" :name="__('uilogin.home page')"></x-tag-a>  

    @endif
</div>
</div>
