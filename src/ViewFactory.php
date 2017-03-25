<?php
/**
 * WP Better Settings
 *
 * A simplified OOP implementation of the WP Settings API.
 *
 * @package TypistTech\WPBetterSettings
 * @author Typist Tech <wp-better-settings@typist.tech>
 * @copyright 2017 Typist Tech
 * @license GPL-2.0+
 * @see https://www.typist.tech/projects/wp-better-settings
 * @see https://github.com/TypistTech/wp-better-settings
 */

declare(strict_types=1);

namespace TypistTech\WPBetterSettings;

use InvalidArgumentException;

/**
 * Final class ViewFactory
 *
 * Factory for View objects.
 *
 * @since 0.1.0
 */
final class ViewFactory
{
    /**
     * Relative path to built-in view partials.
     *
     * @since 0.1.0
     * @var array
     */
    const PARTIALS = [
        'basic-options-page'  => 'partials/basic-options-page.php',
        'section-description' => 'partials/section-description.php',
        'checkbox-field'      => 'partials/checkbox-field.php',
        'email-field'         => 'partials/email-field.php',
        'tabbed-options-page' => 'partials/tabbed-options-page.php',
        'text-field'          => 'partials/text-field.php',
        'textarea-field'      => 'partials/textarea-field.php',
        'url-field'           => 'partials/url-field.php',
    ];

    /**
     * Built a View object for one of the built-in field types.
     *
     * @since 0.1.0
     *
     * @param string $type Type of the partial. Must be one of
     *                     the built-in partial.
     *
     * @return View        View object for the partial.
     *
     * @throws InvalidArgumentException If the partial is not supported.
     */
    public static function build(string $type) : View
    {
        if (! array_key_exists($type, self::PARTIALS)) {
            $errorMessage = sprintf(
                '%1$s: Partial for "%2$s" not found. Build-in partials include "%3$s".',
                __CLASS__,
                $type,
                implode(', ', array_keys(self::PARTIALS))
            );
            throw new InvalidArgumentException($errorMessage);
        }

        return new View(
            plugin_dir_path(__FILE__) . self::PARTIALS[ $type ]
        );
    }
}