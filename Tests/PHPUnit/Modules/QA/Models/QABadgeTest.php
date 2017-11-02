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

namespace Tests\PHPUnit\Modules\QA\Models;

use Modules\QA\Models\QABadge;

require_once __DIR__ . '/../../../../../phpOMS/Autoloader.php';
require_once __DIR__ . '/../../../../../config.php';

class QABadgeTest extends \PHPUnit\Framework\TestCase
{
    public function testDefult()
    {
        $badge = new QABadge();

        self::assertEquals(0, $badge->getId());
        self::assertEquals('', $badge->getName());
    }

    public function testSetGet()
    {
        $badge = new QABadge();

        $badge->setName('Badge Name');

        self::assertEquals('Badge Name', $badge->getName());
    }
}