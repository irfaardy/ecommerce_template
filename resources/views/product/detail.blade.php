@extends('layouts.master')
@section('content')
<div class="container" style="margin-top: 10px;">
                    <div class="row">
  	<div class="col-md-6">
  	<form action="http://localhost/TIFRP17CIDB_AplikasiPencariDanBookingIndekos_UASOOP1/public/search" method="GET">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="now-ui-icons ui-1_zoom-bold"></i></span>
                </div>
                <input name="q" autocomplete="off" type="text" value="" class="form-control" placeholder="Cari Kosan..."> 
              </div>
            </form>
        </div>
    </div>
         <div>
	
<h3>Kosan Aura</h3>
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
					<div class="col-md-12" style="align-items: center; display:flex;min-height:500px; max-height: 500px;">
						<img style="max-height: 500px;" change-target="" class="rounded" src="http://localhost/TIFRP17CIDB_AplikasiPencariDanBookingIndekos_UASOOP1/public/img/kst/original/img_20191216_KST201912091G6DS_1576463130_sWuug.jpg" width="700px">
					</div>
					<div class="col-md-12" style="overflow-y: auto;  max-height:180px; " align="center">
						<!-- <div style="overflow-x: scroll; max-width: 200px;"> -->
												
						<img style="cursor: pointer;" img-change="" class="rounded" img-original="http://localhost/TIFRP17CIDB_AplikasiPencariDanBookingIndekos_UASOOP1/public/img/kst/original/img_20191216_KST201912091G6DS_1576463130_sWuug.jpg" src="http://localhost/TIFRP17CIDB_AplikasiPencariDanBookingIndekos_UASOOP1/public/img/kst/small/img_20191216_KST201912091G6DS_1576463130_sWuug.jpg" width="100px">
						
												
						<img style="cursor: pointer;" img-change="" class="rounded" img-original="http://localhost/TIFRP17CIDB_AplikasiPencariDanBookingIndekos_UASOOP1/public/img/kst/original/img_20200123_KST201912091G6DS_1579743843_s3Guh.jpg" src="http://localhost/TIFRP17CIDB_AplikasiPencariDanBookingIndekos_UASOOP1/public/img/kst/small/img_20200123_KST201912091G6DS_1579743843_s3Guh.jpg" width="100px">
						
												<!-- </div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	

<div class="col-md-5" style="border: 1px solid #E4E4E4;">
	
							
	
	<table class="table">
		<tbody><tr>
			<td>ID Kost</td>
			<td>KST201912091G6DS</td>
		</tr><tr>
			<td>Kamar Tersedia</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Ulasan</td>
			<td><span class="text-primary" title="Ulasan 4.33 bintang"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> 4.33</span></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>Rp.7,500,000/tahun</td>
		</tr>
		<tr>
			<td colspan="2">Fasilitas:
				<div class="container">
					<div class="row">
												<div class="col-xs-6 text-center" data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" data-original-title="Tersedia Pendingin Ruangan">
							<div class="icon-ac"></div>
						</div>
																		<div class="col-xs-6 text-center" data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" data-original-title="Tersedia Kasur">
							<div class="icon-bed"></div>
						</div>
																		<div class="col-xs-6 text-center" data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" data-original-title="Tersedia dapur">
							<div class="icon-dapur"></div>
						</div>
																		<div class="col-xs-6 text-center" data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" data-original-title="Tersedia Kamar Mandi di dalam">
							<div class="icon-km"></div>
						</div>
																								<div class="col-xs-6 text-center" data-toggle="tooltip" data-placement="bottom" title="" data-container="body" data-animation="true" data-original-title="Tersedia jaringan Internet">
							<div class="icon-wifi"></div>
						</div>
											</div>
					
					
				</div>
				<!-- 	<div class="icon-bed"></div>
				<div class="icon-dapur"></div>
				<div class="icon-km"></div>
				<div class="icon-tv"></div>
				<div class="icon-wifi"></div> -->
			</td>
		</tr>
		
				<tr>
			<td colspan="2">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<b>Fasilitas Lainnya :<br></b>
							Televisi LED
						</div>
					</div>
				</div>
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
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#ulasan" role="tab" aria-selected="true">
						<i class="fa fa-comment-o"></i> Ulasan <span class="badge badge-default">3</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#location" role="tab" aria-selected="true">
						<i class="fa fa-map-marker"></i> Lokasi
					</a>
				</li>
				
			</ul>
		</div>
		<div class="card-body">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="deskripsi" role="tabpanel">
					<p></p><p><strong>Kosan dengan kamar luas dan nyaman dengan harga terjangkau.</strong></p>

<p>Cocok untuk mahasiswa atau karyawan.<br>
Ayo booking sekarang</p>

<table style="width:500px" cellspacing="1" cellpadding="1" border="1">
	<tbody>
		<tr>
			<td>Luas Kamar</td>
			<td>50m2</td>
		</tr>
		<tr>
			<td>Fasilitas</td>
			<td>
			<ol>
				<li>AC</li>
				<li>TV</li>
				<li>WiFi</li>
				<li>Dapur di dalam</li>
				<li>Kasur</li>
				<li>Kamar mandi di dalam</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td>Sewa</td>
			<td>Tahunan</td>
		</tr>
		<tr>
			<td>Parkiran</td>
			<td>Ada</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p><p></p>
				</div>
				<div class="tab-pane " id="location" role="tabpanel">
					<table class="table table-bordered">
						<tbody><tr>
							<td>Alamat</td>
							<td>Jl. Karang Arum No.49, RT.01/RW.02, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162</td>
						</tr>
						<tr>
							<td>Kota</td>
							<td>Bandung Barat</td>
						</tr>
						<tr>
							<td>Provinsi</td>
							<td>Jawa Barat</td>
						</tr>
				</tbody></table>
					<div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Jl. Karang Arum No.49, RT.01/RW.02, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0" width="600" height="500" frameborder="0"></iframe><a href="https://www.embedgooglemap.net/blog/purevpn-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>

					
				</div>
				<div class="tab-pane " id="ulasan" role="tabpanel">
					
					
					
					<h3>Kirim Ulasan Anda</h3>
<form action="/a" method="POST">
	<div class="row">
              
              <div class="col-sm-6 col-lg-5 ">
                <div class="form-group ">
                  <input type="text" name="deskripsi" autocomplete="off" placeholder="Contoh : Kosannya bersih, Harganya bersaing" class="form-control ">
                  <label>Penilaian Anda</label>
                  <select name="star" class="form-control">
                  	<option value="" selected="">-Pilih-</option>
                  	<option value="5">★★★★★ (Sangat Baik)</option>
                  	<option value="4">★★★★ (Baik)</option>
                  	<option value="3">★★★ (Biasa Saja)</option>
                  	<option value="2">★★ (Buruk)</option>
                  	<option value="1">★ (Sangat Buruk)</option>
                  </select>
                </div>
                <div class="pull-right"><button type="submit" class="btn btn-success">Kirim Ulasan</button></div>
              </div>
            </div>
</form>
<hr>
		<p class="blockquote blockquote-default">
		<small style="text-transform: capitalize !important;">Dibuat pada: 2018-06-06 00:00:00</small><br>
		<span style="font-weight: bold !important;" class="text-default"><b>Irfa Ardiansyah</b></span>
		<br>
		<span class="text-primary" title="Memberikan 5 bintang"> 
			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
		</span>
		<br>
		Mantap gan
		<br>
		<br>
	</p>
	<hr>
		<p class="blockquote blockquote-default">
		<small style="text-transform: capitalize !important;">Dibuat pada: 2018-06-06 00:00:00</small><br>
		<span style="font-weight: bold !important;" class="text-default"><b>Ilham Jaya H</b></span>
		<br>
		<span class="text-primary" title="Memberikan 3 bintang"> 
			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
		</span>
		<br>
		Lumayan Nyaman
		<br>
		<br>
	</p>
	<hr>
		<p class="blockquote blockquote-default">
		<small style="text-transform: capitalize !important;">Dibuat pada: </small><br>
		<span style="font-weight: bold !important;" class="text-default"><b>-</b></span>
		<br>
		<span class="text-primary" title="Memberikan 5 bintang"> 
			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
		</span>
		<br>
		Murah harganya dan nyaman 
		<br>
		<br>
	</p>
	<hr>
					</div>
				
			</div>
		</div>
	</div>
</div>
</div>
        </div>
        @endsection