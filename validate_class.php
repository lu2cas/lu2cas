<?php

class validate {

	public $rules = array(
		'notEmpty',
		'isValidEmail'
	);

	function __construct() {}

	public function check($fields) {
		$is_valid = true;

		foreach ($fields as $key => $form_field) {
			foreach ($form_field['rules'] as $rule) {
				$check = in_array($rule['rule'], $this->rules) ? $this->{$rule['rule']}($form_field['value']) : false;
				if (!$check && $is_valid) {
					$is_valid = false;
				}
				$fields[$key]['checks'][] = array(
					'rule' => $rule['rule'],
					'is_valid' => $check,
					'message' => $check ? null : $rule['message']
				);
			}
			unset($fields[$key]['rules']);
		}

		return array(
			'success' => $is_valid,
			'fields' => $fields
		);
	}

	public function notEmpty($string) {
		return !empty($string);
	}

	public function isValidEmail($string) {
		if ($this->notEmpty($string)) {
			return (bool)filter_var($string, FILTER_VALIDATE_EMAIL);
		}
		return false;
	}
}
?>