$('document').ready(function() {
	$('.textillate ul li')
		.attr('data-in-effect', 'flash')
		.attr('data-out-effect', 'fadeOut')
		.attr('data-out-shuffle', 'true')
		.attr('data-in-shuffle', 'true');

	$('.textillate').textillate({
		loop: true
	});

	$('#contact-form #send').click(function(e) {
		e.preventDefault();

		var submit = $(this);
		var form = submit.closest('form');
		var url = form.attr('action');
		var post = form.serialize();

		$.ajax({
			type: 'post',
			url: url,
			data: post,
			beforeSend: function() {
				submit.html('Enviando...');
			},
			success: function(data) {
				if (data.is_valid_form) {
					form.find(':input').not('button[type="submit"]').css('border', 'none').css('box-shadow', '');
					if (data.send_email_success) {
						form.find(':input').val('');
					}
					submit.html(data.send_email_message).prop('disabled', true);

					setTimeout(function(){
						submit.html('Enviar').prop('disabled', false);
					}, 2000);
				} else {
					submit.html('Enviar').prop('disabled', false);
					$.each(data.fields, function (j, field) {
						$('#' + field.name).css('border', 'none').css('box-shadow', '');
						$.each(this.checks, function(k, check) {
							if (!check.is_valid) {
								console.log(check.message);
								$('#' + field.name).css('border', '1px solid #f00;').css('box-shadow', '0 0 4px 2px #f00').focus();
							}
						});
					});
				}
			},
			dataType: 'json'
		});

	});

	$('#main-menu a').click(function(e) {
		e.preventDefault();
		var element = $(this).attr('href');

		$('html, body').animate({
			scrollTop: $(element).offset().top
		}, 300);
	});
});