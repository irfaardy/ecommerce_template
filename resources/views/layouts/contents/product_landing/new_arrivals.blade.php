<div class="row">
  @foreach($tmp as $t)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="max-height: 200px;">
                    <div class="hovereffect">
                        <div  class="img"  style="background-image:url('{{route('image',['url' => $t->imagesSingle->url])}}'); background-size: cover; background-position: center; min-height: 200px; width: 100%;" alt=""></div>
                        <div class="overlay">
                           <h2>{{$t->nama}}  @if(!empty($t->discount))<span class="badge badge-warning">{{number_format($t->discount)}}% off</span>@endif</h2>
                           @if(empty($t->discount))
                           <p>Rp {{number_format($t->price)}}</p>
                           @else
                           <?php $calc=$t->price - ($t->price*($t->discount/100)); ?>
                             <p><span style="text-decoration: line-through;"> Rp {{number_format($t->price)}}</span> Rp {{number_format($calc < 0?0:$calc)}}</p>
                           @endif
                           <a class="info" href="#">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
          </div>