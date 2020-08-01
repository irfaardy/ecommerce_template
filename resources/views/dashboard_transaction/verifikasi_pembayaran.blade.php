@extends('layouts.dashboard.layout')
@section('title','Verifikasi Pembayaran')
@section('head_content')
<div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Verifikasi Pembayaran</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
@endsection
@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
		<a target="_blank" href="{{route('admin.gambar.buktitf',['url' => $trans->buktiTF->img_url_bukti])}}">
		<img src="{{route('admin.gambar.buktitf',['url' => $trans->buktiTF->img_url_bukti])}}" width="100%">

	</a>
</div></div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
		<table class="table">
			<tr>
				<td>Invoice</td>
				<td>:</td>
				<td>{{$trans->invoice}}</td>
			</tr>
			<tr>
				<td>Jumlah item</td>
				<td>:</td>
				<td>{{count($trans->details)}}</td>
			</tr>
			<tr>
				<td>Total Harga</td>
				<td>:</td>
				<td>Rp.{{number_format($trans->total_harga)}}</td>
			</tr>
			<tr>
				<td colspan="3">
					@if(!$trans->is_verify)
					<button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#konfirmasi">Verifikasi</button>
					@else
					<div class="badge badge-success"><i class="fas fa-check"></i> Perbayaran sudah diverifikasi</div>
					@endif
				</td>
				
			</tr>
		</table>
	</div>
</div>
	</div>
</div>

	</div>
	</div>
	<div class="row">
		<div class="col-md-9">
		</div>
		<div class="col-md-3">
			
		</div>
	</div>


	<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="konfirmasi" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin untuk verifikasi ini?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
       <h5>Aksi ini tidak dapat di urungkan</h5>
       <form action="{{ route('admin.konfirmasi.aksi') }}" method="POST">
       	@csrf
       	<input type="hidden" name="transaksi_id" value="{{$trans->id}}">
       	<button class="btn btn-success" type="submit">Verifikasi</button> <button class="btn btn-danger" type="button">Batalkan</button> 
       </form>
      </div>
     
    </div>
  </div>
</div>
@endsection