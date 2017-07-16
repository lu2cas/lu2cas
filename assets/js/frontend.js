$('document').ready(function() {
	particlesJS(
		'particles-container',
		{
			"particles": {
				"number": {
					"value": 80,
					"density": {
						"enable": true,
						"value_area": 800
					}
				},
				"color": {
					"value": "#ffffff"
				},
				"shape": {
					"type": "circle",
					"stroke": {
						"width": 0,
						"color": "#000000"
					},
					"polygon": {
						"nb_sides": 5
					},
					"image": {
						"src": "img/github.svg",
						"width": 100,
						"height": 100
					}
				},
				"opacity": {
					"value": 0.5,
					"random": false,
					"anim": {
						"enable": false,
						"speed": 1,
						"opacity_min": 0.1,
						"sync": false
					}
				},
				"size": {
					"value": 3,
					"random": true,
					"anim": {
						"enable": false,
						"speed": 80,
						"size_min": 0.1,
						"sync": false
					}
				},
				"line_linked": {
					"enable": true,
					"distance": 150,
					"color": "#ffffff",
					"opacity": 0.4,
					"width": 1
				},
				"move": {
					"enable": true,
					"speed": 2,
					"direction": "none",
					"random": false,
					"straight": false,
					"out_mode": "out",
					"bounce": false,
					"attract": {
						"enable": false,
						"rotateX": 600,
						"rotateY": 1200
					}
				}
			},
			"interactivity": {
				"detect_on": "canvas",
				"events": {
					"onhover": {
						"enable": true,
						"mode": "repulse"
					},
					"onclick": {
						"enable": true,
						"mode": "push"
					},
					"resize": true
				},
				"modes": {
					"grab": {
						"distance": 400,
						"line_linked": {
							"opacity": 1
						}
					},
					"bubble": {
						"distance": 400,
						"size": 40,
						"duration": 2,
						"opacity": 0.8,
						"speed": 3
					},
					"repulse": {
						"distance": 200,
						"duration": 0.4
					},
					"push": {
						"particles_nb": 4
					},
					"remove": {
						"particles_nb": 2
					}
				}
			},
			"retina_detect": true
		}
	);

	$('.textillate ul li')
		.attr('data-in-effect', 'flash')
		.attr('data-out-effect', 'fadeOut')
		.attr('data-out-shuffle', 'true')
		.attr('data-in-shuffle', 'true');

	$('.textillate').textillate({
		loop: true
	});

	$('#home-content header a[role="button"]').click(function(e) {
		e.preventDefault();

		var element = $(this).attr('href');

		$('html, body').animate({
			scrollTop: $(element).offset().top
		}, 300);
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

	$('#sandwich-menu span').click(function() {
		if ($('#main-menu').is(':visible')) {
			$('#main-menu').slideToggle('fast', function() {
				$('#sandwich-menu').css('background-color', 'transparent');
			});
		} else {
			$('#sandwich-menu').css('background-color', '#1d1d1b');
			$('#main-menu').slideToggle('fast');
		}
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
