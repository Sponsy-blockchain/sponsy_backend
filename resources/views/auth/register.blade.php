@extends('layouts.html')
@section('title','Registration')
@section('content')
    <div class="log-in-container">
        <div class="dashboard__item log-in sign-up-sponsee">
            <form id="log-in-form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                <a href="/"><img class="log-in__image" src="images/logo.png" alt="Logo"></a>
                <label class="log-in__label log-in__label_sponsee" for="log-in-name">Enter you full name</label>
                <input class="log-in__input log-in__input_sponsee input-unify{{ $errors->has('name') ? ' is-invalid' : '' }}" id="log-in-name" type="text" name="name" value="{{ old('name') }}" placeholder="Bob Cowe">

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <label class="log-in__label" style="color:red;">{{ $errors->first('name') }}</label><br>
                    </span>
                @endif

                <label class="log-in__label log-in__label_sponsee" for="log-in-email">Enter your e-mail</label>
                <input class="log-in__input log-in__input_sponsee input-unify{{ $errors->has('email') ? ' is-invalid' : '' }}" id="log-in-email" type="text" name="email" value="{{ old('email') }}" placeholder="sample@sample.com">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <label class="log-in__label" style="color:red;">{{ $errors->first('email') }}</label><br>
                    </span>
                @endif

                <label class="log-in__label log-in__label_sponsee" for="log-in-password">Enter your password</label>
                <input class="log-in__input log-in__input_sponsee input-unify{{ $errors->has('password') ? ' is-invalid' : '' }}" id="log-in-password" type="password" name="password" placeholder="* * * * * *">

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <label class="log-in__label" style="color:red;">{{ $errors->first('password') }}</label><br>
                    </span>
                @endif

                <label class="log-in__label log-in__label_sponsee" for="log-in-re-password">Repeat your password</label>
                <input class="log-in__input input-unify" id="log-in-re-password" type="password" name="password_confirmation" placeholder="* * * * * *">
                <label class="log-in__label log-in__label_sponsee">What is your business?</label>
                <div class="log-in__radio">
                    <div class="radio-item">
                        <div class="radio-item__container">
                            <label class="radio-item__label" for="log-in-sponsee">Sponsee</label>
                            <input class="radio-item__input{{ $errors->has('type') ? ' is-invalid' : '' }}" id="log-in-sponsee" type="radio" name="type" value="0" checked>

                            @if ($errors->has('type'))
                                <span class="invalid-feedback" role="alert">
                                    <label class="log-in__label" style="color:red;">{{ $errors->first('type') }}</label><br>
                                </span>
                            @endif


                        </div><span class="radio-item__text">Business aiming to raise <br>
								sponsorship funding</span>
                    </div>
                    <div class="radio-item">
                        <div class="radio-item__container">
                            <label class="radio-item__label" for="log-in-sponsor">Sponsor</label>
                            <input class="radio-item__input{{ $errors->has('type') ? ' is-invalid' : '' }}" id="log-in-sponsor" type="radio" name="type" value="1">

                            @if ($errors->has('type'))
                                <span class="invalid-feedback" role="alert">
                                    <label class="log-in__label" style="color:red;">{{ $errors->first('type') }}</label><br>
                                </span>
                            @endif

                        </div><span class="radio-item__text">Business aiming to sponsor <br>
								other businesses</span>
                    </div>
                </div>
                <input class="log-in__submit" type="submit" value="Sign up">
                <p class="log-in__account log-in__account_sponsee">By filling in all inputs, I do irrevocably accept <a class="log-in__sign-up log-in__link" href="/">Terms & Conditions</a></p>
            </form>
        </div>
    </div>
@endsection

@section('content1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('What is your business?') }}</label>

                            <div class="col-md-6">
                                <input id="type" type="radio" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="type" value="0" required> Sponsee<br>
                                <input id="type" type="radio" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="type" value="1" required> Sponsor<br>
                                @if ($errors->has('type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
