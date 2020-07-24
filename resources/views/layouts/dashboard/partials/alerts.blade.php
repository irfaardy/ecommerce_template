  @if(Session::get('message_fail'))	
   	<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
     	<i class="icon fas fa-ban"></i> {{Session::get('message_fail')}}
    </div>
    @endif
    @if(Session::get('message_warning'))	
   	<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
     	<i class="icon fas fa-exclamation-triangle"></i> {{Session::get('message_warning')}}
    </div>
    @endif
    @if(Session::get('message_info'))	
   	<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
     	<i class="icon fas fa-info-circle"></i> {{Session::get('message_info')}}
    </div>
    @endif
    @if(Session::get('message_success'))	
   	<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
     	<i class="icon fas fa-check-circle"></i> {{Session::get('message_success')}}
    </div>
    @endif