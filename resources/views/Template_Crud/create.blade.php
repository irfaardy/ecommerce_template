@extends('layouts.dashboard.layout')
@section('title','Halaman Awal')
@section('head_content')
<div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Buat Template Baru</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
@endsection
@section('content')
<form action="" method="POST">
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">SKU</label>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" name="sku" value="" />
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Nama</label>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" name="nama" value="" />
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Platform</label>
        </div>
        <div class="col-md-3">
         <select class="form-control" name="category">
          @foreach(TemplateHelper::platform() as $k)
           <option value="{{$k->id}}">{{$k->nama}}</option>
           @endforeach
         </select>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Tema</label>
        </div>
        <div class="col-md-3">
         <select class="form-control" name="theme">
             @foreach(TemplateHelper::kategori() as $k)
           <option value="{{$k->id}}">{{$k->nama}}</option>
           @endforeach
         </select>
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Link Demo</label>
        </div>
        <div class="col-md-3">
         <input type="text" class="form-control" name="link_demo" value="" />
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Price</label>
        </div>
        <div class="col-md-3">
         <input type="text" class="form-control" name="price" value="" />
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Discount</label>
        </div>
        <div class="col-md-3">
         <input type="text" class="form-control" name="discount" value="" />
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

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Preview Image <small>Harus berupa file gambar seperti jpg,png, atau gif</small></label>
        </div>
        <div class="col-md-3">
         <input type="file" class="form-control" name="images" multiple value="" />
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">File Template <small>Harus berupa file kompresi seperti zip,rar,atau tar</small></label>
        </div>
        <div class="col-md-3">
         <input type="file" class="form-control" name="file" value="" />
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