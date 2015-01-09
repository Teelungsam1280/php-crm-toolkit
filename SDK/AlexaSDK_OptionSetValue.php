<?php

if (!class_exists("AlexaSDK_OptionSetValue")) :

class AlexaSDK_OptionSetValue extends AlexaSDK_Abstract {
	/* Value */
	protected $value = NULL;
	/* Label */
	protected $label = NULL;
	
	/**
	 * Create a new OptionSetValue
	 * 
	 * @param int $_value the Value of the Option
	 * @param String $_label the Label of the Option
	 */
	public function __construct($_value, $_label) {
		/* Store the details */
		$this->value = $_value;
		$this->label = $_label;
	}
	
	/**
	 * Handle the retrieval of properties 
	 * 
	 * @param String $name
	 */
	public function __get($property) {
		/* Allow case-insensitive fields */
		switch (strtolower($property)) {
			case 'value':
				return $this->value;
				break;
			case 'label':
				return $this->label;
		}
		
		/* Property doesn't exist - standard error */
		$trace = debug_backtrace();
		trigger_error('Undefined property via __get(): ' . $property
				. ' in ' . $trace[0]['file'] . ' on line ' . $trace[0]['line'],
				E_USER_NOTICE);
		return NULL;
	}
	
	/**
	 * @return String description of the OptionSetValue including Value and Label
	 */
	public function __toString() {
		return (string)$this->label;
	}
}

endif;