  <script type="text/javascript"> 
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 10000
    });
  </script>
  @if(Session::get('message_fail'))	
   
    <script type="text/javascript">
      $(function() {
       
     Toast.fire({
            type: 'error',
            title: "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Session::get('message_fail')}}"
          })
    });
    </script>
    @endif
    @if(Session::get('message_warning'))	
   {{-- 	<div class="alert alert-warning alert-dismissible auto-dispose">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
     	<i class="icon fas fa-exclamation-triangle"></i> {{Session::get('message_warning')}}
    </div> --}}
     
    <script type="text/javascript">
      $(function() {
     
     Toast.fire({
            type: 'warning',
            title: "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Session::get('message_warning')}}"
          })
    });
    </script>
    
    @endif
    @if(Session::get('message_info'))	
   	<div class="alert alert-info alert-dismissible auto-dispose">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
     	<i class="icon fas fa-info-circle"></i> {{Session::get('message_info')}}
    </div>
    @endif
    @if(Session::get('message_success'))	
   	{{-- <div class="alert alert-success alert-dismissible auto-dispose">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
     	<i class="icon fas fa-check-circle"></i> {{Session::get('message_success')}}
    </div> --}}
    
    <script type="text/javascript">
      $(function() {
     
     Toast.fire({
            type: 'success',
            title: "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Session::get('message_success')}}"
          })
    });
    </script>

    @endif

