<?php

class Agent extends \Fuel\Core\Agent {
	
	public static function is_mobiledevice() {

		return static::mobile_detect_instance()->isMobile();

	}

	protected static function mobile_detect_instance() {

		require_once PKGPATH . 'special_agent' . DS . 'vendor' . DS . 'php-mobile-detect' . DS . 'Mobile_Detect.php';

		$instance = new Mobile_Detect;

		return $instance;

	}

}