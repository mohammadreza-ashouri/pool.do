@extends('auth.falcon-auth', ['type' => 'login'])
@section('content')
<div class="col-md-7 d-flex flex-center">
  <div class="p-4 p-md-5 flex-grow-1">
    <h3>Account Login</h3>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group">
        <label for="card-email">Email address</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group">
        <div class="d-flex justify-content-between">
          <label for="card-password">Password</label><a class="fs--1" href="{{route('password.request')}}">Forgot Password?</a>
        </div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
      <div class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" name="remember" id="card-checkbox" {{ old('remember') ? 'checked' : '' }}>
        <label class="custom-control-label" for="card-checkbox">Remember me</label>
      </div>

      <div class="form-group">
        <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Log in</button>
      </div>
    </form>
    <!-- <div class="w-100 position-relative mt-4">
      <hr class="text-300" />
      <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or log in with</div>
    </div>
    <div class="form-group mb-0">
      <div class="row no-gutters">
        <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-google-plus btn-sm btn-block mt-2" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
        <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="#"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
      </div>
    </div> -->
  </div>
</div>
@endsection