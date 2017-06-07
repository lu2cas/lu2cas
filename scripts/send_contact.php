<?php
	require './autoload.php';

	$name    = isset($_POST['name'])    ? $_POST['name']    : null;
	$email   = isset($_POST['email'])   ? $_POST['email']   : null;
	$subject = isset($_POST['subject']) ? $_POST['subject'] : null;
	$message = isset($_POST['message']) ? $_POST['message'] : null;

	$form_fields = array(
		array(
			'name' => 'name',
			'value' => $name,
			'rules' => array(
				array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório!'
				)
			)
		),
		array(
			'name' => 'email',
			'value' => $email,
			'rules' => array(
				array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório!'
				),
				array(
					'rule' => 'isValidEmail',
					'message' => 'Endereço de e-mail inválido!'
				)
			)
		),
		array(
			'name' => 'subject',
			'value' => $subject,
			'rules' => array(
				array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório!'
				)
			)
		),
		array(
			'name' => 'message',
			'value' => $message,
			'rules' => array(
				array(
					'rule' => 'notEmpty',
					'message' => 'Campo de preenchimento obrigatório!'
				)
			)
		)
	);

	$validator = new Validator();
	$check = $validator->check($form_fields);

	if ($check['success']) {
		require './config.php';

		$smtp_config = Config::getSmtpConfig();

		$phpMailer = new PHPMailer();

		$phpMailer->CharSet = 'UTF-8';
		$phpMailer->Encoding = 'base64';

		//$phpMailer->SMTPDebug = 3;
		$phpMailer->isSMTP();
		$phpMailer->Host = $smtp_config['host'];
		$phpMailer->SMTPAuth = true;

		$phpMailer->Username = $smtp_config['username'];
		$phpMailer->Password = $smtp_config['password'];
		$phpMailer->SMTPSecure = 'tls';
		$phpMailer->Port = $smtp_config['port'];

		$phpMailer->setFrom('contato@lu2cas.com.br', 'Contato [lu2cas.com.br]');
		$phpMailer->addAddress('contato@lu2cas.com.br', 'Luccas Silveira');

		$phpMailer->isHTML(true);

		$phpMailer->Subject = $subject;

		$body = file_get_contents('./../views/emails/contact.html');
		$body = str_replace(
			array(
				'{name}',
				'{email}',
				'{subject}',
				'{message}'
			),
			array(
				$name,
				$email,
				$subject,
				$message
			),
			$body
		);
		$phpMailer->Body = $body;

		$send_email_success = $phpMailer->send();
		$send_email_message = $send_email_success ? 'Mensagem enviada!' : 'Erro no envio!';

		$return = array(
			'is_valid_form' => true,
			'send_email_success' => $send_email_success,
			'send_email_message' => $send_email_message
		);
	} else {
		$return = array(
			'is_valid_form' => false,
			'fields' => $check['fields']
		);
	}

	die(json_encode($return));