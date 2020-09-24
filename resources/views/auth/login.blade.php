@extends('layouts.login')
@section('content')
    <div class="container">
        <div class="row mt-lg-4 justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body text-left row p-0">
                        <div class="col-md-6 left-side">
                            <a href="{{ route('home') }}">
                                <img src="{{asset('/images/logo.png')}}" alt="contact.io" class="logo">
                            </a>
                            <h1>{{ __('Welcome to :0',[__(env('APP_NAME'))])}}</h1>
                            <p>
                                {{ __('Monitor and chat with the visitors on your website, respond to support tickets and create a help center to empower customers to help themselves – all 100% Free')}}
                            </p>
                            <button class="btn btn-outline-light pull-right">{{__('Read more')}}</button>
                        </div>
                        <div class="col-md-6 right-side text-center">
                            <a href="{{ route('home') }}">
                                <img src="{{asset('/images/logo.png')}}" alt="contact.io" class="logo">
                            </a>
                            <h1 class="mb-lg-4">{{ __('Login') }}</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus
                                           placeholder="{{__('Enter Username or email...')}}">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="current-password"
                                           placeholder="{{__('Enter Password...')}}">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Reset Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{__('Don\'t have an account?')}}
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Sign Up') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
