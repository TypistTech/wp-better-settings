<?php
/**
 * WP Better Settings
 *
 * A simplified OOP implementation of the WP Settings API.
 *
 * @package   TypistTech\WPBetterSettings
 *
 * @author    Typist Tech <wp-better-settings@typist.tech>
 * @copyright 2017 Typist Tech
 * @license   GPL-2.0+
 *
 * @see       https://www.typist.tech/projects/wp-better-settings
 * @see       https://github.com/TypistTech/wp-better-settings
 */

declare(strict_types=1);

namespace TypistTech\WPBetterSettings;

use TypistTech\WPKsesView\ViewAwareTrait;
use TypistTech\WPKsesView\ViewAwareTraitInterface;

class Section implements SectionInterface, ViewAwareTraitInterface
{
    use ViewAwareTrait;

    /**
     * String for use in the 'id' attribute of tags.
     *
     * @var string
     */
    private $id;

    /**
     * Title of the section.
     *
     * @var string
     */
    private $title;

    /**
     * Fields in this section.
     *
     * @var FieldInterface[]
     */
    private $fields = [];

    /**
     * Section constructor.
     *
     * @param string $id    String for use in the 'id' attribute of tags.
     * @param string $title Title of the section.
     */
    public function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * Add fields into this section.
     *
     * @param FieldInterface[] ...$fields Fields to be registered in this section.
     */
    public function add(FieldInterface ...$fields)
    {
        $this->fields = array_merge(
            $this->fields,
            $fields
        );
    }

    /**
     * Fields getter.
     *
     * @return FieldInterface[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * Id getter.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Title getter.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}
