<?php
/**
 * Orange Management
 *
 * PHP Version 7.1
 *
 * @category   TBD
 * @package    TBD
 * @author     OMS Development Team <dev@oms.com>
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */

namespace Tests\PHPUnit\phpOMS\Localization;

require_once __DIR__ . '/../../../../phpOMS/Autoloader.php';

use phpOMS\Localization\ISO4217SubUnitEnum;

class ISO4217SubUnitEnumTest extends \PHPUnit\Framework\TestCase
{
    public function testEnums()
    {
        $ok = true;

        $enum = ISO4217SubUnitEnum::getConstants();

        foreach ($enum as $code) {
            if ($code < 0 || $code > 1000) {
                $ok = false;
                break;
            }
        }

        self::assertTrue($ok);
    }
}