<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Db\Profiler\Item;

use IntegrationTester;

class GetSqlBindTypesCest
{
    /**
     * Tests Phalcon\Db\Profiler\Item :: getSqlBindTypes()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function dbProfilerItemGetSqlBindTypes(IntegrationTester $I)
    {
        $I->wantToTest('Db\Profiler\Item - getSqlBindTypes()');
        $I->skipTest('Need implementation');
    }
}
