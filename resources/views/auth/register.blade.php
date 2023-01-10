@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your name" required autocomplete="name" autofocus>

            @error('name')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">{{ __('Email Address') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

    </div>

    <div class="mb-3 form-password-toggle">
        <label for="password" class="form-label">{{ __('Password') }}</label>
      <div class="input-group input-group-merge">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
        required autocomplete="new-password">

         @error('password')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
      </div>
    </div>

    <div class="mb-3 form-password-toggle">
        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
        <div class="input-group input-group-merge">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
      </div>
    <div class="mb-3">
      <button class="btn btn-primary d-grid w-100" type="submit">Sign Up</button>
    </div>
  </form>
  <p class="text-center">
    <span>Already have an account?</span>
    <a href="/login">
      <span>Sign in instead</span>
    </a>
  </p>
@endsection
