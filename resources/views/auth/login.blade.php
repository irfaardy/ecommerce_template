@extends('layouts.masterLogin')
@section('title','Masuk ke Web')
@section('content')
 <form method="POST" action="{{ route('login') }}">
                            @csrf
    <div class="card-header text-center">
        <div class="logo-container">
            <!-- <img src="../assets/img/now-logo.png" alt=""> -->
        </div>
        @error('email')
        <div style="text-transform: capitalize;" class="alert alert-warning">
          
               <strong>{{ $message }}</strong>
          
        </div>
       
        @enderror

         @error('password')
        <div style="text-transform: capitalize;" class="alert alert-warning">
           
               <strong>{{ $message }}</strong>
            
        </div>
       
        @enderror
        
    </div>

    <div class="card-body">
        <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="now-ui-icons ui-1_email-85"></i>
                </span>
            </div>
            <input type="text"   id="email" type="email" class="form-control @error('email') form-control-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus   placeholder="Email">
        </div>
        <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="now-ui-icons objects_key-25"></i>
                </span>
            </div>
            <input id="password" placeholder="Password" type="password" class="form-control @error('password') form-control-danger @enderror" name="password" required autocomplete="current-password">
            
            
        </div>

    </div>
    <div class="card-footer text-center">
        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Masuk</button>
        <div class="pull-left">
            <h6>
            <a href="{{ route('register') }}" class="link">Daftar sekarang</a>
            </h6>
        </div>
        <div class="pull-right">
            <h6>
            <a href="{{ route('password.request') }}" class="link">Lupa kata sandi?</a>
            </h6>
        </div>
    </form>
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    @endsection