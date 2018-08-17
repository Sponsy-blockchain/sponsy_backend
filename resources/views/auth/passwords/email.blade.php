@extends('layouts.html')
@section('title','Reset password')
@section('content')
    <div class="log-in-container">
        <div class="dashboard__item log-in">
            <form id="log-in-form" method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                @csrf
                <a href="/"><img class="log-in__image" src="/images/logo.png" alt="Logo"></a>
                @if (session('status'))
                    {{view('auth.passwords.sent')}}
                    <div class="alert alert-success" role="alert">
                        <label class="log-in__label" style="color: green;">{{ session('status') }}</label>
                    </div>
                @endif
                <label class="log-in__label" for="log-in-email">Please enter your E-mail</label>
                <input class="log-in__input input-unify{{ $errors->has('email') ? ' is-invalid' : '' }}" id="log-in-email" type="text" name="email" value="{{ old('email') }}" placeholder="sample@sample.com">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <label class="log-in__label" style="color: red;">{{ $errors->first('email') }}</label>
                    </span>
                @endif
                <input class="log-in__submit" type="submit" value="Send">
                <p class="log-in__account">Password has been sent to your e-mail address.</p>
            </form>
        </div>
    </div>
@endsection

@section('content1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
