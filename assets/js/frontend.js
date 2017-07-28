$('document').ready(function() {
	$('#occupation').removeClass('hide');

	var particles_config = {
		"particles": {
			"number": {
				"value": 80
			},
			"color": {
				"value": "#ffffff"
			},
			"opacity": {
				"value": 0.5
			},
			"size": {
				"value": 3,
				"random": true
			},
			"line_linked": {
				"enable": true,
				"distance": 150,
				"color": "#ffffff",
				"opacity": 0.2,
				"width": 1
			},
			"move": {
				"enable": true,
				"speed": 1,
			}
		},
		"interactivity": {
			"detect_on": "canvas",
			"events": {
				"onhover": {
					"enable": false
				},
				"onclick": {
					"enable": false
				},
				"resize": true
			}
		},
		"retina_detect": true
	}

	particlesJS(
		'dynamic-particles',
		particles_config
	);

	$('#name').textillate({
		in: {
			effect: 'fadeIn',
			shuffle: true
		}
	});

	$('#occupation').textillate({
		loop: true,
		in: {
			effect: 'fadeIn',
			shuffle: true
		},
		out: {
			effect: 'fadeOut',
			shuffle: true
		}
	});

	$('#home-content header a[role="button"]').click(function(e) {
		e.preventDefault();

		var element = $(this).attr('href');

		$('html, body').animate({
			scrollTop: $(element).offset().top
		}, 300);
	});

	$('#sandwich-menu span').click(function() {
		$('#sandwich-menu').toggleClass('gray-background');
		$('#main-menu').toggleClass('show');
	});

	$('#main-menu a').click(function(e) {
		e.preventDefault();

		if ($('#sandwich-menu span').is(':visible')) {
			$('#sandwich-menu span').click();
		}

		var element = $(this).attr('href');

		$('html, body').animate({
			scrollTop: $(element).offset().top
		}, 300);
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
					form.find(':input').not('button[type="submit"]').css('border', '3px solid #dadada');
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
						$('#' + field.name).css('border', '3px solid #dadada');
						$.each(this.checks, function(k, check) {
							if (!check.is_valid) {
								console.log(check.message);
								$('#' + field.name).css('border', '3px solid #ffa600').focus();
							}
						});
					});
				}
			},
			dataType: 'json'
		});

	});
});
