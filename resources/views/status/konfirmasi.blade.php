@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">
				<h3><b>Status Transaksi</b></h3>
			</div>
				<div class="card-body">
					@include('status.partials.sidebar')
		
	</div>
	</div>
	</div>
	<div class="col-md-9">
		<div class="card">
			<div class="card-header"><b>{{$title}}</b></div>
				<div class="card-body">
					<table class="table">
						<th> Produk </th>
						<th> Invoice </th>
						<th> Jumlah item </th>
						<th> Total Harga </th>
						<th></th>
						<tbody>
							@foreach($trans as $t)
							<tr>
								<td>
									
									<img  data-src="{{route('image',['url' => $t->detail->template->imagesSingle->url])}}" src="{{asset('img/spinner.gif')}}" width="100px">
								</td>
								<td><a href="{{route('checkout.success',['id' => $t->link])}}" >{{$t->invoice}}</a></td>
								<td>{{count($t->details)}} item</td>
								<td>Rp.{{number_format($t->total_harga)}}</td>
								<td>
									@if(time() <= $t->timeout && !$t->is_canceled && !$t->is_verify)
										@if(!empty($t->buktiTF))
											<span class="badge badge-success"><i class="fas fa-spinner fa-spin"></i> Sedang diverifikasi</span>
										@else
									<a href="#konfirmasi-{{$t->id}}" class="btn btn-primary" data-toggle="modal" data-target="#kp-{{$t->id}}">Konfirmasi Pembayaran</a>

									{{-- MODAL --}}
									<div class="modal fade" id="kp-{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="konfirmasi" aria-hidden="true">
							  
							  <div class="modal-dialog"  role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Transfer </h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							      	<form action="{{route('konfirmasi.save')}}" enctype="multipart/form-data" id="frm-{{$t->id}}" method="POST">
									@csrf
									Invoice :  {{$t->invoice}}
							      	<input type="hidden" name="id_transaksi" value="{{$t->id}}">
							        <input type="file" class="form-control" required="" name="file">
							        <small>Max 3 MB dan file harus berupa gambar atau pdf.
							        </small>
							        <div class="row">
							        	<div class="col-md-6">
							        	</div>
							        	<div class="col-md-6">
							        		<button class="btn btn-primary btn-block">Kirim Konfirmasi</button>
							        	</div>
							        </div>
							    </form>
							      </div>
							     
							    </div>
							  </div>
							</div>
							@endif
							@elseif($t->is_verify)
								<a class="btn btn-success" href="{{route('template.received',['id' => $t->id,'uuid' => $t->link])}}">Lihat Detail</a>
							@elseif($t->is_canceled)
								<span class="badge badge-danger" align="center">Dibatalkan</span>
							@else
								<span class="badge badge-warning">Transaksi kadaluarsa</span>
							@endif
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