<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
              <ul class="nav justify-content-center">
                @foreach(TemplateHelper::kategori() as $kat)
          <li class="nav-item">
            <a class="nav-link active" href="{{route('product.cat',['cat' => $kat->id])}}">{{$kat->nama}}</a>
          </li>
          @endforeach
          
        </ul>
  </div>
</div>
</div>