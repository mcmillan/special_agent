<?php
class Agent extends \Fuel\Core\Agent {
	public static function is_mobiledevice() {
		return static::is_mobile();
	}

	public static function is_mobile() {
		return static::mobile_detect_instance()->isMobile();
	}

	public static function is_tablet() {
		return static::mobile_detect_instance()->isTablet();
	}

	public static function isiOS() {
		return static::mobile_detect_instance()->isiOS();
	}

	public static function isAndroidOS() {
		return static::mobile_detect_instance()->isAndroidOS();
	}

	public static function is($value) {
		return static::mobile_detect_instance()->is($value);
	}

	public static function version($value) {
		return static::mobile_detect_instance()->version($value);
	}

	protected static function mobile_detect_instance() {
		require_once PKGPATH.'special_agent'.DS .'vendor'.DS.'php-mobile-detect'.DS.'Mobile_Detect.php';
		$instance = new Mobile_Detect();
		return $instance;
	}
}