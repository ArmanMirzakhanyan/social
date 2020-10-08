@extends('layouts.app')
@section('nav')
@endsection

@section('content')

<div class="theme-layout">
    <div class="container-fluid pdng0">
        <div class="row merged">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="land-featurearea">
                    <div class="land-meta">
                        <h1>Winku</h1>
                        <p>
                            Winku is free to use for as long as you want with two active projects.
                        </p>
                        <div class="friend-logo">
                            <span><img src="images/wink.png" alt=""></span>
                        </div>
                        <a href="#" title="" class="folow-me">Follow Us on</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-reg-bg">
                    <div class="log-reg-area sign">
                        <h2 class="log-title">Login</h2>
                        <form method="POST" action="/login">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email" class="control-label">{{ __('E-Mail Address') }}</label><i class="mtrl-select"></i>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label for="password" class="control-label">{{ __('Password') }}</label><i class="mtrl-select"></i>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="checkbox">
                                <label for="remember">
                                    <input type="checkbox" checked="checked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/><i class="check-box"></i>{{ __('Always Remember Me') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="forgot-pwd" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                            <div class="submit-btns">
                                <button type="submit" class="mtr-btn signin">
                                    <span>{{ __('Login') }}</span>
                                </button>
                                <a class="mtr-btn signup" href="/register"><span>Register</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
