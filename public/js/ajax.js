$(document).ready(function($) {
	$("[add-cart]").click(function() {
		$("#spinner").fadeIn();
		var id=$(this).attr('data-id');
	$.ajax({
				url: $(this).attr('route')+'?id='+id,
				success: function(response){
					$("#spinner").fadeOut();
					Swal.fire({
					  
					  icon: 'success',
					  html:
					    '<h3>'+response.message+'</h3>',
					  
					})
					// $.notify({
					
					// 	type: 'success',
					// 	message: response.message
					// });
					$('#CartCount').html(response.count);
				},
			}).done(function(response) {
				$("#spinner").fadeOut();
			}).fail(function(jqXHR, textStatus, errorThrown){
				$("#spinner").fadeOut();
				$("#spinner").fadeOut();
				if(jqXHR.status == 401){
					var msg = "Silahkan Login Dahulu";
				} else{
					var msg = jqXHR.responseJSON.message;
				}

				Swal.fire({
					  
					  icon: 'warning',
					  html:
					    '<h3>'+msg+'</h3>',
					  
					})
			});

	});
	$("[delete-cart]").click(function() {
		var id=$(this).attr('data-id');
		$("#spinner-"+id).fadeIn();
	$.ajax({
				url: $(this).attr('route')+'?id='+id,
				success: function(response){
					$("#spinner-"+id).fadeOut();
					$("#cartRow-"+id).slideUp(300);
					$.notify({
					
						type: 'success',
						message: response.message
					});
					$("#total").load(location.href + " #total");
					$('#CartCount').html(response.count);
				},
			}).done(function(response) {
				$("#spinner-"+id).fadeOut();
			}).fail(function(jqXHR, textStatus, errorThrown){
				$("#spinner-"+id).fadeOut();
				if(jqXHR.status == 401){
					var msg = "Silahkan Login Dahulu";
				} else{
					var msg = jqXHR.responseJSON.message;
				}

				Swal.fire({
					  
					  icon: 'warning',
					  html:
					    '<h3>'+msg+'</h3>',
					  
					})
			});

	});
	});