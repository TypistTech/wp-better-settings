<?php
/**
 * WP Better Settings
 *
 * A simplified OOP implementation of the WP Settings API.
 *
 * @package   WPBS\WP_Better_Settings
 * @author    Typist Tech <wp-better-settings@typist.tech>
 * @license   GPL-2.0+
 * @link      https://www.typist.tech/
 * @copyright 2017 Typist Tech
 */

namespace WP_Better_Settings;

/* @var \ArrayObject $context Context passed through from Settings class. */

if ( ! empty( $context->desc ) ) {
	echo wp_kses_post( $context->desc );
}
