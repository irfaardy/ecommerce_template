$(document).ready(function($) {
	$("[add-cart]").click(function() {
		$("#spinner").fadeIn();
		var id=$(this).attr('data-id');
	$.ajax({
				url: $(this).attr('route')+'?id='+id,
				success: function(response){
					$("#spinner").fadeOut();
					$.notify({
					
						type: 'success',
						message: response.message
					});
					$('#CartCount').html(response.count);
				},
			}).done(function(response) {
				$("#spinner").fadeOut();
			})

	});
	});