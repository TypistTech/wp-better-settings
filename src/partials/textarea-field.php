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

echo '<textarea class="regular-text" ';
if ( absint( $context->rows ) > 0 ) {
	echo 'rows="' . absint( $context->rows ) . '" ';
}
include __DIR__ . '/common-attributes.php';
echo ' >';

echo esc_textarea( $context->value );

echo '</textarea>';

include __DIR__ . '/description-paragraph.php';
