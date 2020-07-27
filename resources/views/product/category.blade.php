@extends('layouts.master')
@section('sub_title',"<h2>Kategori</h2>")
@section('content')

<div class="row" >
	@if(count($tmp) <= 0)
	<div class="col-md-12">
		<div align="center" class="alert alert-warning"><b>Kategori masih kosong</b></div>
	</div>
	@endif
  @foreach($tmp as $t)
               <div class="col-md-4  " style="min-height: 350px;">
				<div class="card">
					<div style="background-size: cover; background-image: url('{{route('image',['url' => $t->imagesSingle->url])}}');  min-width: 200px; min-height: 200px;"></div>
					<div class="card-body">
						<p class="card-text"></p><h4>{{$t->nama}}</h4>
							<span>{{TemplateHelper::kategori($t->theme_id)->nama}}</span><br>
							
							<p class="text-primary">
								@if(empty($t->discount))
                           <p>Rp {{number_format($t->price)}}</p>
                           @else
                           <?php $calc=$t->price - ($t->price*($t->discount/100)); ?>
                             <p><span style="text-decoration: line-through;"> Rp {{number_format($t->price)}}</span> Rp {{number_format($calc < 0?0:$calc)}}</p>
                           @endif <br>
								
							</p>
						<p></p>
						
						<a href="{{route('product.details',['id' => $t->id])}}" class="btn btn-primary btn-block">Lihat Detail</a>
					</div>
				</div>
			</div>
                @endforeach
</div>
 @endsection
        
 