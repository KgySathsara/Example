<!-- Main navbar -->
<div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
    <div class="container-fluid">
        <div class="d-flex d-lg-none">
            <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded">
                <i class="ph-list"></i>
            </button>
            <button type="button" class="navbar-toggler sidebar-mobile-secondary-toggle rounded">
                <i class="ph-arrow-left"></i>
            </button>
        </div>

        <div class="navbar-brand flex-1 flex-lg-0 d-none d-sm-flex">
            <a href="index" class="d-inline-flex align-items-center">
                <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                <img src="{{URL::asset('assets/images/logo_text_light.svg')}}" class="d-none d-sm-inline-block h-16px ms-3" alt="">
            </a>
        </div>

        <div class="d-lg-none">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-mobile" aria-expanded="false">
                <i class="ph-squares-four"></i>
            </button>
        </div>

        <div class="navbar-collapse order-2 order-lg-1 collapse" id="navbar-mobile" style="">
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link rounded">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link rounded dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                        <a href="#" class="dropdown-item">One more line</a>
                    </div>
                </li>
            </ul>
        </div>

        <ul class="nav gap-sm-2 order-1 order-lg-2 ms-auto">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                    <i class="ph-bell"></i>
                    <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                    <i class="ph-chats"></i>
                </a>
            </li>
            <li class="nav-item nav-item-dropdown-lg dropdown">
                <a href="#" class="navbar-nav-link align-items-center rounded p-1" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="status-indicator-container">
                        <img src="@if (Auth::user()->avatar != ''){{ URL::asset('images/' . Auth::user()->avatar) }}@else{{ URL::asset('images/avatar-1.jpg') }}@endif" class="w-32px h-32px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </div>
                    <span class="d-none d-lg-inline-block mx-lg-2">{{Auth::user()->name}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a href="#" class="dropdown-item">One more line</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
                        <i class="ph-sign-out me-2"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
