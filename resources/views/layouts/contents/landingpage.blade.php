<section style="margin-top: 24px" id="more">
        <div class="container-fluid" style="padding: 20px;">
            <div class='row'>
                <div class="col-md-12" align="center">
                    <h3>Selamat Datang</h3>
                    <hr>
                    
                </div>
                {{-- </div> --}}
        {{-- <div class="row"> --}}
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding">
                <div class="square" style="background-image: url('{{asset('img/ecommerce.jpg')}}'); background-size: cover;"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding  center" >
                <div  class="deskripsi" style="padding:20px;">
               <h3 class="judul">Dashboard</h3><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><hr>
               <button type="button" class="btn btn-outline-success">View All</button>
           </div>

                
            </div>
        {{-- </div> --}}
        {{-- <div class="row"> --}}
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding center">
              <div class="deskripsi" style="padding:20px;">
               <h3 class="judul">company</h3><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><hr>
               <button type="button" class="btn btn-outline-success">View All</button>
           </div>

                
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding">
                <div class="square" style="background-image: url('{{asset('img/Company.jpg')}}'); background-size: cover;"></div>
            </div>
        {{-- </div> --}}
        {{-- <div class="row"> --}}
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding">
                <div class="square" style="background-image: url('{{asset('img/bg.jpg')}}'); background-size: cover;"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding center">
              <div class="deskripsi" style="padding:20px;">
               <h3 class="judul">Mobile</h3><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><hr>
               <button type="button" class="btn btn-outline-success">View All</button>
           </div>

                
            </div>
        </div>
        <div class="container" style="margin-top: 30px;">
          <div class='row '>
                <div class="col-md-12" align="center">
                    <h3>New Arrivals</h3>
                    <hr>
                    
                </div>
                </div>

                </div>
            @include('layouts.contents.product_landing.new_arrivals')
            
            
            
          <div class='row mt-3' >
                <div class="col-md-12" align="center">
                    <h3>Hot Products</h3>
                    <hr>
                    
                </div>
            </div>
            @include('layouts.contents.product_landing.hot_items')

            
           
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 lesspadding">
                <div class="square" style="background-image: url('{{asset('img/dev.jpg')}}'); background-size: cover;"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding  center" style="background-color: #e4e4e4;">
                <div  class="deskripsi" style="padding:20px;">
               <h3 class="judul">Ingin Desain Custom Sendiri?</h3><span>Kamu dapat request custom sendiri sesuai keinginan dan desain aplikasi anda dibuat oleh developer professional kami.</span><hr>
               <button type="button" class="btn btn-outline-success">Klik Disini</button>
           </div>
            </div>
        </div>
    </section>