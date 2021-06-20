@extends('layouts.app')

@section('content')
<div class="col-md-7 d-flex flex-center">
    <div class="p-4 p-md-5 flex-grow-1">
        <h3>Reset password</h3>
        <form class="mt-3" method="POST" action="{{ route('password.update') }}">
         @csrf
         <input type="hidden" name="token" value="{{ $token }}">

         <div class="form-group">
            <label for="card-reset-password">Email</label>
            <input type="email" id="card-reset-password" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="card-reset-password">New Password</label>
            <input type="password" id="card-reset-password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="card-reset-confirm-password">Confirm Password</label>
            <input class="form-control" type="password" id="card-reset-confirm-password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
        </div>
        <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Set password</button>
        </form>
    </div>
</div>
@endsection
