<?php

class JsonServices
{
	public static $instance;

	private $_polices;

	public static function getInstance() {
		if(empty(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct() {
		$json = file_get_contents(__JSON_FILE);

		$this->_polices = json_decode($json, true);
	}

	public function fetchAll() {
		return $this->_polices;
	}

	public function fetchOne($policy) {
		return (isset($this->_polices[$policy])) ? $this->_polices[$policy] : False;
	}
}