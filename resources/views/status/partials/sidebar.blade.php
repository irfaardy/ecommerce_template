 <div class="list-group">
  <a  href="{{route('status.konfirmasi')}}" class="list-group-item  @if(Route::currentRouteName()=="status.konfirmasi") active @endif">Menunggu Konfirmasi</a>
  <a href="{{route('status.diterima')}}"  class="list-group-item @if(Route::currentRouteName()=="status.diterima") active @endif">Produk Diterima</a>
  <a href="{{route('status.gagal')}}" class="list-group-item @if(Route::currentRouteName()=="status.gagal") active @endif">Transaksi Gagal</a>
</div> 