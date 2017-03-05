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

$name = sprintf(
	'%s[%s]',
	esc_html( $context->option_name ),
	esc_html( $context->id )
);

echo ' name="' . esc_attr( $name ) . '" ';
echo 'id="' . esc_attr( $context->id ) . '" ';
if ( ! empty( $context->desc ) ) {
	echo 'aria-describedby="' . esc_attr( esc_attr( $context->id . '-description' ) ) . '" ';
}
disabled( $context->disabled );
echo ' ';
