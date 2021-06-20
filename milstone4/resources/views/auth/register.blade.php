@extends('auth.falcon-auth', ['type' => 'register'])
@section('content')
<div class="col-md-7 d-flex flex-center">
  <div class="p-4 p-md-5 flex-grow-1">
    <h3>Register</h3>
    <form  method="POST" action="{{ route('register') }}">
      @csrf
      <div class="form-group">
        <label for="card-name">Name</label>
        <input type="text" id="card-name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
      <div class="form-group">
        <label for="card-email">Email address</label>
        <input type="email" id="card-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
      <div class="form-row">
        <div class="form-group col-6">
          <label for="card-password">Password</label>
          <input type="password" id="card-password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
        </div>
        <div class="form-group col-6">
          <label for="card-confirm-password">Confirm Password</label>
          <input type="password" id="card-confirm-password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>

        </div>
      </div>
      <div class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" id="card-register-checkbox" name="accept" required/>
        <label class="custom-control-label" for="card-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Register</button>
      </div>
    </form>
    <!-- <div class="w-100 position-relative mt-4">
      <hr class="text-300" />
      <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or register with</div>
    </div> -->
    <!-- <div class="form-group mb-0">
      <div class="row no-gutters">
        <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-google-plus btn-sm btn-block mt-2" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
        <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="#"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
      </div>
    </div> -->
  </div>
</div>
@endsection        