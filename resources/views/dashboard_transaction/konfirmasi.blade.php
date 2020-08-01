@extends('layouts.dashboard.layout')
@section('title','Konfirmasi Pembayaran')
@section('head_content')
<div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Konfirmasi Pembayaran</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
@endsection
@section('content')
<table class="table table-bordered table-striped">
	<thead>
		<th>Invoice</th>
		<th>Total</th>
		<th>Jumlah</th>
		<th>Dibeli pada</th>
		<th>Aksi</th>
	</thead>
	<tbody>
	@foreach($trans as $t)
		<tr>
			<td>{{$t->invoice}}</td>
			<td>{{number_format($t->total_harga)}}</td>
			<td>{{count($t->details)}}</td>
			<td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($t->created_at))->diffForHumans()}}</td>
			<td>
				@if(empty($t->buktiTF))
				<span href="" class="badge badge-warning"><i class="fas fa-check"></i> Belum mengirimkan konfirmasi</span>
				@else
				<a href="{{route('admin.konfirmasi.show',['id' => $t->id])}}" class="btn btn-primary"><i class="fas fa-check"></i> Verifikasi sekarang</a>
				@endif
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection