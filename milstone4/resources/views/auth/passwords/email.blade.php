@extends('auth.falcon-auth')

@section('content')

<div class="col-md-7 d-flex flex-center">
    <div class="p-4 p-md-5 flex-grow-1">
        <div class="text-center text-md-left">
        <h4 class="mb-0"> Forgot your password?</h4>
        <p class="mb-4">Enter your email and we'll send you a reset link.</p>
        </div>
        <div class="row justify-content-center">
        <div class="col-sm-8 col-md">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="mb-3" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <input type="email" placeholder="Email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Send reset link</button>
                </div>
            </form>
            <!-- <a class="fs--1 text-600" href="#!">I can't recover my account using this page<span class="d-inline-block ml-1">&rarr;</span></a> -->
        </div>
        </div>
    </div>
</div>


@endsection
