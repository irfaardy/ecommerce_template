<header class="header">
        <nav class="navbar navbar-expand-lg  py-2 active">
            <div class="container">
                <a href="{{route("LandingPage")}}" class="navbar-brand text-uppercase font-weight-bold"><img src="{{asset('img/logo_wt.png')}}" height="50px" class="brand"></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div class="collapse navbar-collapse in" id="navbarSupportedContent">
                   @include('layouts/navbars/menus')
                </div>
            </div>
        </nav>
    </header>
      @include('layouts/navbars/cat')