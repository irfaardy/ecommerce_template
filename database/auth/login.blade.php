@extends('layouts.app_login')

@section('title','Masuk ke Aplikasi')
@section('content')
<div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card-group">
                        <div class="card p-4">
                            <div class="card-body">
                                <form  method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h1>Masuk</h1>
                                    <p class="text-muted">Masuk untuk melanjutkan</p>
                                    @error('email')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    @error('password')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend" >
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        
                                        
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend" >
                                            <span class="input-group-text"><i class="fa fa-lock"></i> </span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off" placeholder="Kata sandi">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary px-4">Masuk</button>
                                        </div>
                                        <div class="col-6">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Lupa Kata Sandi?') }}
                                            </a>
                                            @endif
                                        </div>
                                        <!-- <div class="col-6 text-right">
                                            <button type="button" class="btn btn-link px-0">Forgot password?</button>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card text-white bg-primary py-5 d-md-down-none " style="width:44%">
                            <div class="card-body text-center flex-row align-items-center" style=" margin: 0 auto;">
                                <div>
                                    <h2><i class="fa fa-vcard-o  fa-3x"></i></h2><h2>Penyetokan Barang</h2>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection