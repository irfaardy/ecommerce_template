@extends('layouts.dashboard.layout')
@section('title','Halaman Awal')
@section('head_content')
<div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Templates</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
@endsection
@section('content')
<div class="row">
  <div class="col-md-3"><a href="{{route('template.create')}}" class="btn btn-primary">Tambah Data</a></div>
</div>
  <table class="table table-striped" id="template">
    <thead>
      <th>SKU</th>
      <th>Nama Template</th>
      <th>Kategori</th>
      <th>Tema</th>
      <th>Price</th>
      <th>Discount</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      @foreach($template as $tmp)
      <tr>
        <td>{{$tmp->sku}}</td>
        <td>{{$tmp->nama}}</td>
        <td>{{$tmp->category_id}}</td>
        <td>{{$tmp->theme_id}}</td>
        <td>{{$tmp->price}}</td>
        <td>{{$tmp->discount}}</td>
        <td><form action="{{route('template.delete',['id' => $tmp->id])}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$tmp->id}}">
          <a href="{{route('template.edit',['id' => $tmp->id])}}" class="btn btn-sm btn-warning">Edit</a> <button type="submit" href="" class="btn btn-sm btn-danger">Delete</a>
          </form> </td>
      </tr>
      @endforeach
    </tbody>
    
  </table>
@endsection