 <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg" class="nav-link text-uppercase font-weight-bold">CATEGORY</a></li>
                        <li class="nav-item"><a href="{{route('product.cat',['cat' => 7])}}" class="nav-link text-uppercase font-weight-bold">DEALS OF THE DAY</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">SERVICES</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">SEARCH</a></li>
                        <li class="nav-item"><a href="{{route('shoppingcart')}}" class="nav-link text-uppercase font-weight-bold"><i class="fa fa-shopping-cart"></i>@auth <span class='badge badge-warning' id='CartCount'>  {{TemplateHelper::cart()}} </span>@endauth</a></li>
                        {{-- <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact us</a></li> --}}
                       @guest
                            <li class="nav-item">
                                <a class="nav-link text-uppercase font-weight-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-uppercase font-weight-bold dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                 @if(Auth::user()->level == 4)
                                      <a class="dropdown-item" href="{{ route('dashboard') }}">
                                        
                                        <i class="fas fa-dashboard"></i> Dashboard
                                      </a>
                                      @endif 
                                      <a class="dropdown-item" href="{{route('status.konfirmasi')}}">
                                        
                                        <i class="fas fa-tachometer"></i> Status Pembayaran
                                      </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>