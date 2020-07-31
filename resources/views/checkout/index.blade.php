@extends('layouts.master')

@section('content')
<h3>Review Checkout</h3>
<form action="{{route('checkout.progress')}}" method="POST">
@csrf
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="height: 100%">
			<h3>Informasi Akun</h3>
			<hr>
			<table class="table ">
				
				<tbody>
					<tr>
						<td><b>Nama</b></td>
						<td>{{Auth::user()->name}}</td>
					</tr>
					<tr>
						<td><b>Email</b></td>
						<td>{{Auth::user()->email}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="card">
				<div class="card-body" style="height: 100%">
			<h3>Pembayaran</h3>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<label for="bank">Pilih Bank</label>
					<select class="form-control" name="bank">
						@foreach(TemplateHelper::bank() as $bnk)
							<option value="{{$bnk->id}}">{{$bnk->nama_bank}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
		</div>
		<div class="col-md-6" style="min-height: 100%">
			<div class="card">
				<div class="card-body">
					<h3>Produk dalam keranjang</h3>
			<hr>
					<table class="table ">
						<thead>
							<th>Product</th>
							<th>Description</th>
							<th>Price</th>
							<th> <i class="fas fa-spinner fa-spin" style="display: none;" id="spinner-all"></i></th>
						</thead> 
						<tbody>
							@foreach($cart as $t)
							{{-- @dd($t->category) --}}
							<tr id="cartRow-{{$t->id}}">
								<td><img  data-src="{{route('image',['url' => $t->template->imagesSingle->url])}}" src="{{asset('img/spinner.gif')}}" width="100px"></td>
								<td>

									<a href="{{route('product.details',['id' => $t->template->id])}}" >{{$t->template->nama}}</a><br>
									<small>Category: {{$t->template->category->nama}}</small>
								</td>
								<td>@if(empty($t->template->discount))
		                           <p>Rp {{number_format($t->template->price)}}</p>
		                           @else
		                           <?php $calc=$t->template->price - ($t->template->price*($t->template->discount/100)); ?>
		                             <p><span style="text-decoration: line-through;"> Rp {{number_format($t->template->price)}}</span> Rp {{number_format($calc < 0?0:$calc)}}</p>
		                           @endif
		                       </td>
		                       <td>
		                       	<button delete-cart route="{{route('shoppingcart.delete',['id'=>$t->id])}}" data-id="{{$t->id}}" type="button" title="Hapus dari keranjang" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button>
		                       </td>
							</tr>
							@endforeach
							<tfoot>
								<tr>
									<td colspan="2" align="right">
										<b>Total</b>
									</td>
									<td><b><span id="total">Rp.{{number_format($total)}}</span></b></td>
								</tr><tr>
									<td colspan="2" align="right">
										
									</td>
									<td>
										<button class="btn btn-success btn-block">
											Lanjutkan
										</button>
									</td>
								</tr>
							</tfoot>
						</tbody>
					</table>
				</div>
				</div>

		</div>
	</div>
</form>
@endsection