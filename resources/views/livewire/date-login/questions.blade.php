<div class="d-flex mt-4" style="height: 600px;">
    <div class="container m-auto">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('uilogin.register_new_account') }} // {{ session('idc') }}</div>

                    <div class="card-body">
                        @include('partials.general._alert-session')

                        <form wire:submit='store'>


                            @if (session('q1'))
                                <div class="row mb-3">

                                    <label for="q1"
                                        class="col-md-2 col-form-label  required">{{ __('uilogin.q1') }}
                                    </label>

                                    <div class="col-md-7">
                                        <p id="q1_p" type="text" class="form-control border-0">

                                            {{ session('q1') }}؟
                                        </p>

                                    </div>

                                    <div class="col-md-3">
                                        <input name="answer_q1" wire:model='answer_q1' type="text" value="{{ old('answer_q1') }}"
                                            @class(['form-control', 'is-invalid' => $errors->has('answer_q1')])>
                                        @include('partials.general._show-error', [
                                            'field_name' => 'answer_q1',
                                        ])
                                        <small class="text-muted">{{ __('uilogin.ex') }} 2012</small>
                                    </div>

                                </div>
                            @endif

                            @if (session('q2'))
                                <div class="row mb-3">

                                    <label for="q2"
                                        class="col-md-2 col-form-label  required">{{ __('uilogin.q2') }}
                                    </label>

                                    <div class="col-md-7">
                                        <p id="q2_p" type="text" class="form-control border-0">

                                            {{ session('q2') }}؟
                                        </p>

                                    </div>

                                    <div class="col-md-3">
                                        <input name="answer_q2" wire:model='answer_q2' type="text" value="{{ old('answer_q2') }}"
                                            @class(['form-control', 'is-invalid' => $errors->has('answer_q2')])>
                                        @include('partials.general._show-error', [
                                            'field_name' => 'answer_q2',
                                        ])
                                        <small class="text-muted">{{ __('uilogin.ex') }} 1983</small>
                                    </div>

                                </div>
                            @endif

                            <x-button :name="__('uilogin.register_new_account')" class="bg-primary text-white"
                                divlclass="d-grid gap-2"></x-button>


                            <x-uilogin-cancel-back :route="route('login')" wire:navigate
                                label="cancel_back"></x-uilogin-cancel-back>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
