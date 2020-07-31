@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">
				<h3>Status Transaksi</h3>
			</div>
				<div class="card-body">
					 <div class="list-group">
  <a  href="{{route('status.konfirmasi')}}" class="list-group-item">Menunggu Konfirmasi</a>
  <a href="{{route('status.diterima')}}" class="list-group-item">Pesanan Diterima</a>
  <a href="{{route('status.gagal')}}" class="list-group-item">Pesanan Gagal</a>
</div> 
		
	</div>
	</div>
	</div>
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">{{$title}}</div>
				<div class="card-body">
					<table class="table ">
						<thead>
							<th>Product</th>
							<th>Description</th>
							<th> <i class="fas fa-spinner fa-spin" style="display: none;" id="spinner-all"></i></th>
						</thead> 
						<tbody>
							@foreach($trans->details as $t)
							{{-- @dd($t->category) --}}
							<tr>
								<td><img  data-src="{{route('image',['url' => $t->template->imagesSingle->url])}}" src="{{asset('img/spinner.gif')}}" width="100px"></td>
								<td>

									<a href="{{route('product.details',['id' => $t->template->id])}}" >{{$t->template->nama}}</a><br>
									<small>Category: {{$t->template->category->nama}}</small>
								</td>
								
		                       <td>
		                       		<a href="{{ route('download.template',['id' => $t->template->templateFile->link_download])}}" class="btn btn-success"><i class="fas fa-download"></i> Download Template</a>
		                       </td>
							</tr>
							@endforeach
							</tbody>
							
						
					</table>
			</div>
			</div>
		</div>
		</div>
@endsection