<?php
namespace PrimeSlider\Modules\RemoteFraction;

use PrimeSlider\Base\Prime_Slider_Module_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Module extends Prime_Slider_Module_Base {

	public function get_name() {
		return 'remote-fraction';
	}

	public function get_widgets() {
		$widgets = [
			'Remote_Fraction',
		];

		return $widgets;
	}
}
