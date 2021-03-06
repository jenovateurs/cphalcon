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

namespace Phalcon\Test\Unit\Events\Manager;

use UnitTester;

class EnablePrioritiesCest
{
    /**
     * Tests Phalcon\Events\Manager :: enablePriorities()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function eventsManagerEnablePriorities(UnitTester $I)
    {
        $I->wantToTest('Events\Manager - enablePriorities()');

        $I->skipTest('Need implementation');
    }
}
