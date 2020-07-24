@extends('layouts.dashboard.layout')
@section('head_content','Informasi Akun')
@section('title','Informasi akun '.Auth::user()->name)
@section('content')
<div class="col-md-6  mx-auto">
                <div class="text-center">
                 <i class="fas fa-user-circle fa-3x"></i>
                </div>

                <h3 class="profile-username text-center">{{ Auth::user()->name}}</h3>

                <p class="text-muted text-center">{{ Auth::user()->email }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>ID Akun</b> <span class="float-right">{{ Auth::user()->id }}</span>
                  </li>
                  <li class="list-group-item">
                    <b>Cabang</b> <span class="float-right">Bandung</span>
                  </li>
                  <li class="list-group-item">
                    <b>No telp</b> <span class="float-right">{{ Auth::user()->no_telp }}</span>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat Cabang</b> <span class="float-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                  </li>
                  <li class="list-group-item">
                    <b>Akun ini dibuat pada</b> 
                    <span class="float-right">
                        {{  \Carbon\Carbon::parse(Auth::user()->created_at)
       ->format('d-M-Y H:i:s') }}
                </span>
                  </li>
                </ul>

            </div>
@endsection