@extends('layouts.master')
@section('content')
<div class="container" style="margin-top: 10px;">
               
 <div>
	
<h3>{{$tmp->nama}}</h3>
</div>
<hr>

<script type="text/javascript">
	function img_change(){
		$("[img-change]").click(function(){
			$("[change-target]").hide();
			$("[change-target]").fadeIn(500);
			$("[change-target]").attr('src',$(this).attr('src'));
		});
	}
	$( document ).ready(function() {
img_change();
	});
</script>
<div class="row">
	<div class="col-md-7" align="center">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12" align="center" style="align-items: center; display:flex;min-height:500px; max-height: 500px;">
						<img style="max-height: 500px;" change-target="" class="rounded" data-src="{{route('image',['url' => $tmp->imagesSingle->url])}}" src="{{asset('img/spinner.gif')}}" style="max-width: 500px;">
					</div>
					<div class="col-md-12" style="overflow-y: auto;  max-height:180px; " align="center">
						<!-- <div style="overflow-x: scroll; max-width: 200px;"> -->
						 @foreach($tmp->images as $img)						
						<img style="cursor: pointer;" img-change="" class="rounded" img-original="{{route('image',['url' => $img->url])}}" data-src="{{route('image',['url' => $img->url])}}" src="" width="100px">
						@endforeach
						
						
						
												<!-- </div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	

<div class="col-md-5" style="border: 1px solid #E4E4E4;">
	
							
	
	<table class="table">
		<tbody><tr>
			<td>ID Template</td>
			<td>{{$tmp->sku}}</td>
		</tr><tr>
			<td>Link Demo</td>
			<td><a href="{{$tmp->link_demo}}" class="btn btn-info btn-sm">Demo</a></td>
		</tr>
		
		<tr>
			<td>Harga</td>
			<td>Rp.{{number_format($tmp->price)}}</td>
		</tr>
		<tr>
			<td colspan="2">
				<a href="#" add-cart data-id="{{$tmp->id}}" route="{{route('shoppingcart.add',['id'=>$tmp->id])}}" class="btn btn-success btn-block"><i class="fas fa-spinner fa-spin" style="display: none;" id="spinner"></i> Beli</a>
			</td>
		</tr>
		
			
				
	</tbody></table>
</div>
</div>
<div class="row" style="margin-top: 15px;">
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<ul class="nav nav-tabs " role="tablist">
				<li class="nav-item">
					<a class="nav-link  active" data-toggle="tab" href="#deskripsi" role="tab" aria-selected="false">
						<i class="fa fa-file-text"></i> Deskripsi
					</a>
				</li>
				
				
				
			</ul>
		</div>
		<div class="card-body">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="deskripsi" role="tabpanel">
					{!!$tmp->deskripsi!!}
				</div>
				
				
			</div>
		</div>
	</div>
</div>
</div>
        </div>
        @endsection