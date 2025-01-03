<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">

    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">
            
            <small class="text-muted font-size-sm ml-2">12 messages</small>
        </h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>

    <div class="offcanvas-content pr-5 mr-n5">

        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label"
                    style="background-image:url('{{ asset('template-assets/metronic7/media/users/300_21.jpg') }}')">
                </div>
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                    {{ session('full_name') ?? __('PFBS.guest')  }}
                </a>
                
                <div class="navi mt-2">
             
                    @include('partials.general._logout')
                </div>
            </div>
        </div>



        <div class="separator separator-dashed mt-8 mb-5"></div>


        {{-- @include('partials.metronic7._user-profile-tools') --}}


    </div>

</div>
