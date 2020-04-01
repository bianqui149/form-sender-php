$(document).ready(function(){
	$('#contactform').submit(function(event){

		event.preventDefault();

		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data){
				console.log(data);
			},
			error: function(data){
				console.log(data);
			}
		})
	})
});