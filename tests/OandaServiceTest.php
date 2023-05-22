<?php

namespace Siven76\OandaLibrary\Tests;

use PHPUnit\Framework\TestCase;
use Siven76\OandaLibrary\Service\OandaService;

class OandaServiceTest extends TestCase
{
    public function testGetAccountInformation()
    {
        $service = new OandaService('your-api-key');
        $info = $service->getAccountInformation('your-account-id');

        $this->assertIsArray($info);
        $this->assertArrayHasKey('account', $info);
    }

    // Add more tests...
}
