<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Desainin</title>
    @include('layouts.assets.meta')
    @include('layouts.assets.css')

</head>

<body>
    @if(Route::currentRouteName()=="LandingPage")
        <!-- Navbar-->
        @include('layouts.navbars.landingpage')

        <!-- Jumbotron -->
        @include('layouts.contents.jumbotron')
        <!-- EndJumbotron -->
        <!-- Content -->
        @include('layouts.contents.landingpage')
        <!-- End Content -->
        <!-- Footer -->
    @else
          <!-- Navbar-->
        @include('layouts.navbars.default')
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
            <h2>@yield('sub_title')</h2>
        @yield('content')
    
                </div>
            </div>
        </div>
    @endif
    </body>
    <footer class="section footer-classic context-dark bg-image" style="margin-top:24px;background: #00251a;">
        <div class="container-fluid" style="margin-top:24px;">
            <div class="row row-30">
                <div class="col-md-4 col-xl-5" style="margin-top:24px;">
                    <div class="pr-xl-4">
                        <a class="brand" href="index.html"><img class="brand-logo-light" src="{{asset('img/logo_wt.png')}}" alt="" width="140"  srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    </div>
                </div>
                <div class="col-md-4" style="margin-top:24px;">
                    <h5>Contacts</h5>
                    <dl class="contact-list">

                        <dd><i class="fas fa-map-marked-alt  mr-2"></i> Bandung</dd>

                        <dd><a href="mailto:#"><i class="fas fa-envelope  mr-2"></i> info@desainin.com </a></dd>

                        <dd><a href="tel:#"><i class="fas fa-phone mr-2"></i> +62 6631416</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-md-4 col-xl-3" style="margin-top:24px;">
                    <h5>Terhubung dengan kami</h5>
                    <ul class="nav-list">
                        <li><a href="#">Kontak Kami</a></li>
                        <li><a href="#">Pekerjaan</a></li>
                        <li><a href="#">Kerjasama</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <hr style="border-color: #838383;">
            <div class="row">
                <div class="col-md-6">&copy; 2020 Desainin.All Rights Reserved.</div>
                <!-- SOCMED BUTTON -->
                <div class="col-md-6" align="right">
                    <a href="#FB" class="socmed-link"><i class="fab fa-facebook-square fa-2x mr-2"></i></a>
                    <a href="#TWITTER" class="socmed-link"><i class="fab fa-twitter-square fa-2x mr-2"></i></a>
                    <a href="#IG" class="socmed-link"><i class="fab fa-instagram-square fa-2x mr-2"></i></a>
                </div>
                <!-- END SOCMED BUTTON -->
            </div>
    </footer>
    <!-- End Footer -->

@include('layouts.assets.js')
</html>