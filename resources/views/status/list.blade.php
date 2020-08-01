@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">
				<h3><b>Status Transaksi</b></h3>
			</div>
				<div class="card-body">
					 <div class="list-group">
 	@include('status.partials.sidebar')
</div> 
		
	</div>
	</div>
	</div>
	<div class="col-md-9">
		<div class="card">
			<div class="card-header"><b>{{$title}}</b></div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
					<table width="100%">
						<tr>
							<td>No.Invoice</td>
							<td>:</td>
							<td><b>{{$trans->invoice}}</b></td>
						</tr>
						<tr>
							<td>Total item</td>
							<td>:</td>
							<td><b>{{count($trans->details)}}</b></td>
						</tr><tr>
							<td>Serial Number</td>
							<td>:</td>
							<td><b><span id="redeem-code" style="font-family: 'Lucida Console', Monaco, monospace;" ></span></b><a show-sn href="#" class="btn btn-primary btn-sm" sn-data="{{$trans->redeem->serial}}">Lihat SN</a></td>
						</tr>
					</table>
				</div>
			</div>
					
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
									<small>Category: {{$t->template->category->nama}}</small><br>
									<small>File size: {{TemplateHelper::bytesUnit($t->template->templateFile->size)}}</small>
								</td>
								
		                       <td>
		                       		<a href="{{ route('download.template',['transid'=>$trans->id,'id' => $t->template->templateFile->link_download])}}" class="btn btn-success"><i class="fas fa-download"></i> Download Template</a>
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