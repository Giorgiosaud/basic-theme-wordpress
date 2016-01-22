(function(){
	jQuery(document).ready(function($) {
		$('.ajaxSend').submit(function(event) {
			url=myAjax.ajaxurl;

			form=$(this);
			data=form.serialize();
			data=data+'&action=';
			data=data+form.data('action');
			console.log(url);
			console.log(data);
			form.find('button').addClass('disabled');
			$.post(url,data, function(data, textStatus, xhr) {
				
				$('.Emailstatus').html(data.body).addClass(data.alertStatus).fadeIn('slow').delay('8000').fadeOut('slow');
				form.find('button').removeClass('disabled');
				
			},"json");
			event.preventDefault()
		});
		$('button[type="submit"]').click(function(event) {
			$(this).addClass('disabled');
		});
	});
})()
