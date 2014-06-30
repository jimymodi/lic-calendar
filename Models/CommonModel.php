<?php

class CommonModel
{
	public static $instance;

	public static function getInstance() {
		if(empty(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct() {
		$this->jsonServices = JsonServices::getInstance();
	}

	
	public function getPremiumsByYear($year) {
		$polices = $this->jsonServices->fetchAll();
		
		//filter all policies having endYear greater than the year passed. 
		$polices = array_filter($polices, function($policy) use ($year){ return $policy['endYear'] > $year; });

		$policesObj = array();
		return $polices;
	}
}