<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}">
    <img style="width:3.5rem" id="theme-logo" src="{{asset('assets/img/illustrations/logo.png')}}" alt="{{env('APP_NAME')}}" class="img-responsive">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link active" href="{{route('home')}}"><span class="fa fa-home"></span> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('download')}}"><span class="fa fa-download"></span> Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="fa fa-anchor"></span> Pool</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="fa fa-hammer"></span> Top Farmers</a>
        </li>
        
        
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-cog"></span> Settings
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route('api')}}">Api</a>
            <a class="dropdown-item" href="{{route('config')}}">Configuration</a>
            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="adjust-theme"><span class="fa fa-adjust"></span> </a>
        </li>

        <li class="nav-item dropdown dropdown-on-hover">
            <a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar" style="width:1.35rem;">
                    <img class="rounded-circle" src="{{asset('assets/img/team/avatar.png')}}" alt="" />
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
  </div>
</nav>