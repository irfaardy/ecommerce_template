<header class="header">
        <nav class="navbar navbar-expand-lg  py-2 active">
            <div class="container">
                <a href="#" class="navbar-brand text-uppercase font-weight-bold"><img src="{{asset('img/logo_wt.png')}}" height="50px" class="brand"></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div class="collapse navbar-collapse in" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg" class="nav-link text-uppercase font-weight-bold">CATEGORY</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">DEALS OF THE DAY</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">SERVICES</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">SEARCH</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold"><i class="fa fa-shopping-cart"></i> <span class='badge badge-warning' id='CartCount'> {{TemplateHelper::cart()}} </span></a></li>
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
                </div>
            </div>
        </nav>
    </header>
      @include('layouts/navbars/cat')