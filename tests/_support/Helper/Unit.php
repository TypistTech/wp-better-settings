<?php

declare(strict_types=1);

namespace TypistTech\WPBetterSettings\Helper;

use AspectMock\Test;
use Codeception\TestInterface;

/**
 * Here you can define custom actions
 * all public methods declared in helper class will be available in $I
 */
class Unit extends \Codeception\Module
{
    public function _after(TestInterface $test)
    {
        Test::clean();
    }
}
