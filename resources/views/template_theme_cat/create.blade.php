@extends('layouts.dashboard.layout')
@section('title','Halaman Awal')
@section('head_content')
<div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Buat Kategori</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
@endsection
@section('content')
<form action="{{route('template.theme.store')}}" method="POST">
  <div class="row">
    @csrf
    <div class="col-md-12">
      <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Nama Kategori</label>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" name="nama" value="" required="" />
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Sembunyikan dari daftar kategori</label>
        </div>
        <div class="col-md-3">
          <select name="hidden" class="form-control">
            <option value="1">YA</option>
            <option value="0" selected="">TIDAK</option>
          </select>
        </div>
      </div>
    </div>
     <div class="form-group">
      <div class="row">
        <div class="col-md-9">
          <label for="">Deskripsi</label>
       
         <textarea id='description' class="form-control" name="deskripsi"></textarea>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <button class="btn btn-primary btn-block" method="submit">Simpan</button>
    </div>

    </div>
</div>
</form>
 <script type="text/javascript">
CKEDITOR.replace('description')</script>
@endsection