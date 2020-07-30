@extends('layouts.master')
@section('sub_title',"Keranjang Belanja")
@section('content')

<div class="row" >
	@if(count($cart) <= 0)
	<div class="col-md-12">
		<div align="center" class="alert alert-light"><b>Keranjang belanja masih kosong</b></div>
	</div>
	@else
	<table class="table table-striped table-bordered">
  	<thead>
  		<th>Gambar</th>
  		<th>Nama Produk</th>
  		<th>Harga</th>
  		<th>Aksi</th>
  	</thead>
  	<tbody>
  @foreach($cart as $t)
  
  		<tr id="cartRow-{{$t->id}}">
  			<td><img  data-src="{{route('image',['url' => $t->template->imagesSingle->url])}}" src="{{asset('img/spinner.gif')}}" width="100px"></td>
  			<td><a href="{{route('product.details',['id' => $t->template->id])}}" >{{$t->template->nama}}</a></td>
  			<td>@if(empty($t->template->discount))
                           <p>Rp {{number_format($t->template->price)}}</p>
                           @else
                           <?php $calc=$t->template->price - ($t->template->price*($t->template->discount/100)); ?>
                             <p><span style="text-decoration: line-through;"> Rp {{number_format($t->template->price)}}</span> Rp {{number_format($calc < 0?0:$calc)}}</p>
                           @endif</td>
  			<td><button delete-cart route="{{route('shoppingcart.delete',['id'=>$t->id])}}" data-id="{{$t->id}}" class="btn btn-danger" type="button"><i class="fas fa-spinner fa-spin" style="display: none;" id="spinner-{{$t->id}}"></i> Hapus</button></td>
  		</tr>


                @endforeach
                  	</tbody>
                  	<tfoot>
                  		<tr>
                  			<td align="right" colspan="2">Total</td>
                  			<td colspan="2" id=""><b><span id="total">Rp.{{number_format($total)}}</span></b></td>
                  		</tr>
                  	</foot>
  </table>
  <hr>
</div>
  <div class="row">
  	<div class="col-md-9" >
  		
  	</div>
  	<div class="col-md-3" >
  		<a href="{{route('checkout.review')}}" class="btn btn-success btn-block  {{TemplateHelper::cart()<=0 ? "btn-disabled":null}}">Checkout</a>
  	</div>
  </div>
  	@endif
 @endsection
        
 