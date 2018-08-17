@extends('layouts.html')
@section('title','Login')
@section('content')
    <div class="log-in-container">
        <div class="dashboard__item log-in">
            <form id="log-in-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <a href="/"><img class="log-in__image" src="images/logo.png" alt="Logo"></a>
                <label class="log-in__label" for="log-in-email">E-mail</label>
                <input class="log-in__input input-unify{{ $errors->has('email') ? ' is-invalid' : '' }}" id="log-in-email" type="text" name="email" value="{{ old('email') }}" placeholder="sample@sample.com">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <label class="log-in__label" style="color:red;">{{ $errors->first('email') }}</label><br>
                        </span>
                    @endif
                <label class="log-in__label" for="log-in-password">Password</label><a class="log-in__forget log-in__link" href="{{ route('password.request') }}">Forgot password?</a>
                <input class="log-in__input log-in__input_password input-unify{{ $errors->has('password') ? ' is-invalid' : '' }}" id="log-in-password" type="password" name="password" placeholder="········">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <label class="log-in__label" style="color:red;">{{ $errors->first('password') }}</label><br>
                        </span>
                    @endif
                <input class="log-in__input log-in__input_remember" id="log-in-remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="label-unify" for="log-in-remember">Remember me</label>
                <input class="log-in__submit" type="submit" value="Login">
                <p class="log-in__account">Don’t have an account? <a class="log-in__sign-up log-in__link" href="{{url('/register')}}">Sign up here.</a></p>
            </form>
        </div>
    </div>
@endsection

@section('content1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
