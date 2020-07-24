<!-- jQuery -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script> -->
<!-- Bootstrap -->
<script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('assets/dashboard/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/pwdstr/jquery.passtrength.js')}}"></script>
<script src="{{asset('assets/lazy-load/jquery.lazyload-any.js')}}"></script>
 <script type="text/javascript">
 	 
 	 $(document).ready(function($) {
         $('#new_pwd').passtrength({
			  tooltip: true,
			  eyeImg : "{{asset('assets/pwdstr/eye.svg')}}", // toggle icon
			  textWeak: "Lemah",
			  textMedium: "Normal",
			  textStrong: "Kuat",
			  textVeryStrong: "Sangat Kuat",
			  minChars: 8,
			});
         // $('.lazyload').lazyload();
        $(".alert").delay(5000).slideUp("slow", function() {
			    $(this).alert('close');
			});
     });



        </script>

<!-- OPTIONAL SCRIPTS -->
<script type="text/javascript">
	
</script>
<script src="{{asset('assets/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/pace-progress/pace.min.js')}}"></script>
<script>
	$(document).ajaxStart(function() { Pace.restart(); });

</script>

<script src="{{asset('assets/dashboard/js/demo.js')}}"></script>
<script src="{{asset('assets/dashboard/js/pages/dashboard3.js')}}"></script>