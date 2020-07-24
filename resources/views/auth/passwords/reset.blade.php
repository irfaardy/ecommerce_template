@extends('layouts.masterLogin')

@section('content')
<form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
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
             <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email_info" value="{{ $email ?? old('email') }}" required autocomplete="email" readonly="" autofocus>


                               
        </div>
         @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

         <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="now-ui-icons objects_key-25"></i>
                </span>
            </div>
           <input id="password" type="password" placeholder="Password Baru" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">


                               
        </div>
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

         <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="now-ui-icons objects_key-25"></i>
                </span>
            </div>
             <input id="password-confirm" type="password" placeholder="Konfirmasi Password Baru" class="form-control" name="password_confirmation" required autocomplete="new-password">


                               
        </div>
       <button type="submit" class="btn btn-primary btn-block">
                                     {{ __('Reset Password') }}
                                </button>

    </div>
    <div class="card-footer text-center">
       
      
            <input type="hidden" name="email" value="{{ $email ?? old('email') }}">
    </form>
@endsection
