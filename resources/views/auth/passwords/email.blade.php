@extends('layouts.masterLogin')

@section('content')
 <form method="POST" action="{{ route('password.email') }}">
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
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
         @error('password')
        <div style="text-transform: capitalize;" class="alert alert-warning">
           
               <strong>{{ $message }}</strong>
            
        </div>
       
        @enderror
        
    </div>

    <div class="card-body">
         <b>{{ __('Reset Password') }}</b><hr>
        <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="now-ui-icons ui-1_email-85"></i>
                </span>
            </div>
           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                               
        </div>
         @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
       <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Send Password Reset Link') }}
                                </button>

    </div>
    <div class="card-footer text-center">
        <div>
        
                                <div>
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
@endsection
