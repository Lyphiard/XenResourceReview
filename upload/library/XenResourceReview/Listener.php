<?php


class XenResourceReview_Listener
{

	public static function load_class($class, array &$extend) {
		$classes = array(
			'XenResource_Model_Resource'
		);

		if(in_array($class, $classes)) {
			$extend[] = "XenResourceReview_{$class}";
		}
	}

}