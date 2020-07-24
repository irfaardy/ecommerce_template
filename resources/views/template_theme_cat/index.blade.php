@extends('layouts.dashboard.layout')
@section('title','Category')
@section('head_content')
<div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Templates Category</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
@endsection
@section('content')
<div class="row">
  <div class="col-md-3"><a href="{{route('template.theme.create')}}" class="btn btn-primary">Tambah Data</a></div>
</div>
  <table class="table table-striped table-bordered" id="theme">
    <thead>
      <th>Nama</th>
      <th>Deskripsi</th>
      <th>Hidden</th>
      <th>Created At</th>
      <th>Updated At</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      @foreach($template as $tmp)
      <tr>
        <td>{{$tmp->nama}}</td>
        <td>{{strip_tags($tmp->deskripsi)}}</td>
        <td>
          @if($tmp->hidden_from_category)
              <span class="badge badge-success">YES</span>
          @else
              <span class="badge badge-danger">NO</span>
          @endif
        </td>
        <td>{{$tmp->created_at}}</td>
        <td>{{$tmp->updated_at}}</td>
        <td>
          <form action="{{route('template.theme.delete',['id' => $tmp->id])}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$tmp->id}}">
          <a href="{{route('template.theme.edit',['id' => $tmp->id])}}" class="btn btn-sm btn-warning">Edit</a> <button type="submit" href="" class="btn btn-sm btn-danger">Delete</a>
          </form> </td>
      </tr>
      @endforeach
    </tbody>
    
  </table>
@endsection