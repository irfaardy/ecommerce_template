@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row center-block">
		<div class="col-md-6">
			{{-- {{date('Y-m-d H:m:s',$data->timeout)}} / {{date('Y-m-d H:m:s',time())}} --}}
				@if($data->is_canceled)
					<div class="card">
					<div class="card-header" align="center"><h2>Transaksi telah dibatalkan</h2></div>
					<div class="card-body">
						
						
						Transaksi ini tidak dapat dilakukan konfirmasi karena telah dibatalkan. </b>
					</div>
				
				</div>

				@elseif($data->is_verify) 
					<div class="card">
					<div class="card-header" align="center"><h2>Transaksi sukses</h2></div>
					<div class="card-body">
						
						
						Sekarang anda dapat mendownload templatenya <a href="{{route('template.received',['id' => $data->id,'uuid' => $data->link])}}">disini</a>. </b>
					</div>
				
				</div>
				@elseif(time() >= $data->timeout ) 
				<div class="card">
					<div class="card-header" align="center"><h2>Transaksi telah kadaluarsa </h2></div>
					<div class="card-body">
						
						Transaksi ini tidak dapat dilakukan konfirmasi karena waktu pembayaran sudah habis pada <b>{{date("d-m-Y H:m:s",$data->timeout)}}</b>
					</div>
				
				</div>
				@else 
			<div class="card">
				<div class="card-header" align="center"><h2>Checkout Sukses</h2></div>
				<div class="card-body">
					<div align="center"><h3>Tagihan anda sebesar</h3></div>
					<div align="center"><b><h3>Rp.{{number_format($data->total_harga)}}</h3></b></div>
					Segera lakukan pembayaran sebelum {{date("d-m-Y H:m:s",$data->timeout)}}. Jika tidak maka transaksi Anda akan dianggap batal.
					<table class="table">
						<tr>

							<td>Bank</td>
							<td>{{$data->bank->nama_bank}}</td>
						</tr><tr>
							<td>Atas Nama</td>
							<td>{{$data->bank->atas_nama}}</td>
						</tr><tr>
							<td>No Rekening</td>
							<td>{{$data->bank->rekening}}</td>
						</tr>
					</table>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#konfirmasi-pembayaran">Konfirmasi Pembayaran</a>
					<a href="#" class="btn btn-light btn-block" data-toggle="modal" data-target="#batalkan-pesanan">Batalkan Pesanan</a>
				</div>
			</div>
			 @endif
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header" align="center"><h2>Produk yang dibeli</h2></div>
				<div class="card-body">
					<h3>No. Invoice : <b>{{$data->invoice}}</b></h3>
					<table class="table ">
						<thead>
							<th>Product</th>
							<th>Description</th>
							<th>Price</th>
							<th> <i class="fas fa-spinner fa-spin" style="display: none;" id="spinner-all"></i></th>
						</thead> 
						<tbody>
							@foreach($data->details as $t)
							{{-- @dd($t->category) --}}
							<tr>
								<td><img  data-src="{{route('image',['url' => $t->template->imagesSingle->url])}}" src="{{asset('img/spinner.gif')}}" width="100px"></td>
								<td>

									<a href="{{route('product.details',['id' => $t->template->id])}}" >{{$t->template->nama}}</a><br>
									<small>Category: {{$t->template->category->nama}}</small>
								</td>
								<td>
		                           <p>Rp {{number_format($t->harga)}}</p>
		                          
		                       </td>
		                       <td>
		                       
		                       </td>
							</tr>
							@endforeach
							<tfoot>
								<tr>
									<td colspan="2" align="right">
										<b>Total</b>
									</td>
									<td><b><span id="total">Rp.{{number_format($data->total_harga)}}</span></b></td>
								</tr><tr>
									<td colspan="2" align="right">
										
									</td>
									<td>
										
									</td>
								</tr>
							</tfoot>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->

<div class="modal fade" id="konfirmasi-pembayaran" tabindex="-1" role="dialog" aria-labelledby="konfirmasi" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Transfer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="{{route('konfirmasi.save')}}" enctype="multipart/form-data" method="POST">
		@csrf
      	<input type="hidden" name="id_transaksi" value="{{$data->id}}">
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

<!-- Modal -->

<div class="modal fade" id="batalkan-pesanan" tabindex="-1" role="dialog" aria-labelledby="konfirmasi" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Batalkan pesanan?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="{{route('konfirmasi.batal')}}" enctype="multipart/form-data" method="POST">
		@csrf
      	<input type="hidden" name="id_transaksi" value="{{$data->id}}">
        	<label>Alasan pembatalan</label>
        <select name="alasan" class="form-control" required="">
        	<option value="">-Pilih-</option>
        	<option value="Ingin mengganti metode pembayaran.">Ingin mengganti metode pembayaran</option>
        	<option value="Ingin mengganti produk yang dibeli">Ingin mengganti produk yang dibeli</option>
        	<option value="Tidak tertarik dengan produk yang dibeli">Tidak tertarik dengan produk yang dibeli</option>
        	<option value="Tidak jadi membeli">Tidak jadi membeli</option>
        	<option value="Lainnya">Lainnya</option>
        </select>
        <hr>
        <div class="row">
        	<div class="col-md-6">
        		<button class="btn btn-danger btn-block">Ya</button>
        	</div>
        	<div class="col-md-6">
        		<button  type="button"  data-dismiss="modal" class="btn btn-light btn-block">Batalkan</button>
        	</div>
        </div>
    </form>
      </div>
     
    </div>
  </div>
</div>
@endsection