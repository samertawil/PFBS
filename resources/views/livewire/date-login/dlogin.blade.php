<div>


    <meta name="csrf-token" content="{{ csrf_token() }}">


    <div class="d-flex mt-5" style="height: 600px; ">

        <div class="container  m-auto px-5  ">


            <div>

                <div class=" fw-bolder h4 text-dark d-flex justify-content-center align-items-center">
                    <div>


                        <div class="text-center pt-2">
                            <strong>{{ __('PFBS.login_system') }} {{ session('auth_idc') }} </strong>
                        </div>

                    </div>



                </div>
            </div>


            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="card ">

                        <div class="card-header d-flex justify-content-between">
                            <span> {{ __('PFBS.login_system') }} </span>
                            <a class="text-decoration-none" href="#">{{ __('PFBS.about_system') }}</a>
                        </div>


                        @include('partials.general._alert-session')
                        <div class="card-body">

                            <form wire:submit="authenticate">


                                <x-input wire:model="idc" name="idc" type='number' label="yes" min="400000000"
                                    max="999999999" divlclass="col-lg-12" dir="ltr" required autofocus req>
                                </x-input>


                                {{-- <x-input wire:model="birthdate" type="date" name="birthdate" label="yes"
                                    divlclass="col-lg-12" dir="ltr" required> </x-input> --}}

                                <x-select-parts-date name="birthdate" label :labelname="__('PFBS.birthdate')" req>
                                </x-select-parts-date>

                                <input hidden name="birthdate" class="@error('birthdate') is-invalid
                                    
                                @enderror">
                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <small>{{ $message }}</small>
                                    </span>
                                @enderror

                                <x-button :label="__('PFBS.access')" divlclass="d-grid gap-2"
                                    class="bg-primary text-white"></x-button>



                            </form>


                            <div class="my-4 d-md-flex justify-content-between">

                                <a href="{{ route('support.create') }}" class="text-decoration-none"
                                    wire:navigate>{{ __('PFBS.get-help') }}</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


</div>
