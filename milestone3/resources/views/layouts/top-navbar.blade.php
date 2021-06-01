<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand">

    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
        <div class="d-flex align-items-center">
            <img class="mr-2" src="{{asset("assets/img/illustrations/logo.png")}}" alt="" width="40" />
            <span class="text-sans-serif">{{env('APP_NAME')}}</span>
        </div>
    </a>
    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
        
        <li class="nav-item dropdown dropdown-on-hover">
            <a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{asset("assets/img/team/avatar.png")}}" alt="" />

                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white rounded-soft py-2">
                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/home">Profile &amp; account</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" 
                    href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>