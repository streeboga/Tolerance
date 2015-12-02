<?php

/*
 * This file is part of the Tolerance package.
 *
 * (c) Samuel ROZE <samuel.roze@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FaultTolerance;

use FaultTolerance\Waiter\WaiterException;

interface WaitStrategy
{
    /**
     * Do wait the time expected by the strategy.
     *
     * @throws WaiterException
     */
    public function wait();
}
