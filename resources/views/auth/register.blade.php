@extends('layouts.masterLogin')
@section('title','Daftar Sekarang')
@section('content')

<form method="POST" action="{{ route('register') }}">
                            @csrf
    <div class="card-header text-center">
        <div class="logo-container">
            <!-- <img src="../assets/img/now-logo.png" alt=""> -->
        </div>
        <h4>Daftar Sekarang</h4>
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
                    <i class="fa fa-user"></i>
                </span>
            </div>
           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name" autofocus>

        </div>
        <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-envelope"></i>
                </span>
            </div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email"> 


            
            
        </div>
        <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-phone"></i>
                </span>
            </div>
            <input id="no_hp" type="no_hp" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" placeholder="Nomor Telepon" required autocomplete="no_hp">

            
            
            
        </div>
       
        <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-key"></i>
                </span>
            </div>
             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Kata Sandi" required autocomplete="new-password">

            
            
        </div>
         <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-key"></i>
                </span>
            </div>
             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Konfirmasi Kata Sandi" autocomplete="new-password">

            
            
        </div>
        
    </div>
    <div class="card-footer text-center">
        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Daftar</button>
        <div class="pull-left">
            <h6>
            <a href="/" class="link">Beranda</a>
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
</div> -->
@endsection
