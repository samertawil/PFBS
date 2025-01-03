<div>


    <meta name="csrf-token" content="{{ csrf_token() }}">


    <div class="d-flex mt-5" style="height: 600px; ">

        <div class="container  m-auto px-5  ">


            <div>

                <div class=" fw-bolder h4 text-dark d-flex justify-content-center align-items-center">
                    <div>


                        <div class="text-center pt-2">
                            <strong>{{__('login_system')}} {{session('auth_idc')}} </strong>
                        </div>

                    </div>



                </div>
            </div>


            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="card ">

                        <div class="card-header d-flex justify-content-between">
                            <span> {{ __('login_system') }} </span>
                            <a class="text-decoration-none" href="#">{{ __('uilogin.about_system') }}</a>
                        </div>


                        @include('partials.general._alert-session')
                        <div class="card-body">

                            <form wire:submit="authenticate">


                                <x-input wire:model="idc" name="idc" type='number' label="yes"
                                    divlclass="col-lg-12" dir="ltr" required autofocus> </x-input>


                                <x-input wire:model="birthdate" type="date" name="birthdate" label="yes"
                                    divlclass="col-lg-12" dir="ltr" required> </x-input>


                                <x-button :name="__('uilogin.access')" divlclass="d-grid gap-2"
                                    class="bg-primary text-white"></x-button>



                            </form>


                            <div class="my-4 d-md-flex justify-content-between">

                                <a href="{{route('support.create')}}" class="text-decoration-none" wire:navigate>{{ __('uilogin.get-help') }}</a>

                             
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


</div>
