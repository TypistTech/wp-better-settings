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

/* @var \ArrayObject $context Context passed through from Menu_Pages class. */

do_action( str_replace( '-', '_', $context->menu_slug ) . '_before_page_title' );

echo '<h1>' . esc_html( $context->page_title ) . '</h1>';

do_action( str_replace( '-', '_', $context->menu_slug ) . '_after_page_title' );

echo '<h2 class="nav-tab-wrapper">';
foreach ( (array) $context->tabs as $tab ) {

	$active = '';
	if ( $context->menu_slug === $tab->menu_slug ) {
		$active = ' nav-tab-active';
	}

	echo sprintf(
		'<a href="%1$s" class="nav-tab%2$s" id="%3$s-tab">%4$s</a>',
		esc_url( $tab->url() ),
		esc_attr( $active ),
		esc_attr( $tab->menu_slug ),
		esc_html( $tab->menu_title )
	);
}
echo '</h2>';

do_action( str_replace( '-', '_', $context->menu_slug ) . '_after_nav_tabs' );

include __DIR__ . '/options-form.php';
