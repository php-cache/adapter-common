<?php

/*
 * This file is part of php-cache\doctrine-adapter package.
 *
 * (c) 2015-2015 Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cache\Adapter\Redis\Tests;

use Cache\Adapter\Redis\BaseCachePool;
use Cache\IntegrationTests\TaggableCachePoolTest;
use Predis\Client;

class IntegrationTagTest extends TaggableCachePoolTest
{
    private $client = null;

    public function createCachePool()
    {
        return new BaseCachePool($this->getClient());
    }

    private function getClient()
    {
        if ($this->client === null) {
            $this->client = new Client('tcp:/127.0.0.1:6379');
        }

        return $this->client;
    }
}
