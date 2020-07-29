{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/pace-progress/pace.min.js')}}"></script>
<script src="{{asset('js/ajax.js')}}"></script>

<!-- <script src="{{asset('assets/lazy-load/jquery.lazyload-any.js')}}"></script> -->
 // 
<script>
	$(document).ajaxStart(function() { Pace.restart(); });
	function load(img)
</script>