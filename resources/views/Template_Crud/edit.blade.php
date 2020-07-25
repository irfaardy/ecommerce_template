@extends('layouts.dashboard.layout')
@section('title','Halaman Awal')
@section('head_content')
<div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Edit Template</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
@endsection
@section('content')
<form action="{{route('template.update')}}" enctype="multipart/form-data" method="POST">
  <div class="row">
    @csrf
    <div class="col-md-12">
      <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">SKU</label>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" name="sku" value="{{$tmp->sku}}" />
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Nama</label>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" name="nama" value="{{$tmp->nama}}" />
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Platform</label>
        </div>
        <div class="col-md-3">
         <select class="form-control" name="platform">
          @foreach(TemplateHelper::platform() as $k)
           <option value="{{$k->id}}" @if($tmp->platform_id == $k->id) selected="selected" @endif>{{$k->nama}}</option>
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
           <option value="{{$k->id}}" @if($tmp->theme_id == $k->id) selected="selected" @endif>{{$k->nama}}</option>
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
         <input type="text" class="form-control" name="link_demo" value="{{$tmp->link_demo}}" />
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Price</label>
        </div>
        <div class="col-md-3">
         <input type="text" class="form-control" name="price" value="{{$tmp->price}}" />
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Discount</label>
        </div>
        <div class="col-md-3">
         <input type="text" class="form-control" name="discount" value="{{$tmp->discount}}" />
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-md-9">
          <label for="">Deskripsi</label>
       
         <textarea id='description' class="form-control" name="deskripsi">{{$tmp->deskripsi}}</textarea>
        </div>
      </div>
    </div>

     <div class="form-group">
      <div class="row">
        <div class="col-md-3">
          <label for="">Preview Image <small>Harus berupa file gambar seperti jpg,png, atau gif</small></label>
        </div>
        <div class="col-md-3">
         <input type="file" class="form-control" name="images[]" multiple value="" />
        </div>
      </div>
    </div>
    @if(!empty($tmp->images))
    <div class="row">
      @foreach($tmp->images as $img)
      <div class="col-md-2" id="img-{{$img->id}}">
        <div style="background-image:url('{{route('image',['url' => $img->url])}}'); background-size: cover; background-position: center; min-height: 100px; min-width: 100px;"></div>
        <button type="button" target-hide="#img-{{$img->id}}" delete-img route="{{ route('template.image.delete') }}" data-img="{{ $img->url }}" data-produk="{{ $tmp->id }}" class="btn btn-danger btn btn-block">Hapus</button>
      </div>
      @endforeach
    </div>
    @endif
    <hr>
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
    @if(!empty($tmp->templateFile))
    <div class="row">
      @foreach($tmp->templateFile as $fl)
      <div class="col-md-2">
        <button  type="button" class="btn btn-danger btn btn-block">Hapus {{$fl->real_path}}</button>
      </div>
      @endforeach
    </div>
    @endif
    <hr>
    <div class="col-md-3">
      <button class="btn btn-primary btn-block" method="submit">Simpan</button>
    </div>

    </div>
</div>
</form>
 <script type="text/javascript">
CKEDITOR.replace('description')</script>
@endsection