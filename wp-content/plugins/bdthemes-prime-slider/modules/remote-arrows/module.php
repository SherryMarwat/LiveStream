<?php
namespace PrimeSlider\Modules\RemoteArrows;

use PrimeSlider\Base\Prime_Slider_Module_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Module extends Prime_Slider_Module_Base {

	public function get_name() {
		return 'remote-arrows';
	}

	public function get_widgets() {
		$widgets = [
			'Remote_Arrows',
		];

		return $widgets;
	}
}
