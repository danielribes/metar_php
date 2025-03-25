<?php

namespace dribes\MetarParser\Tests\Service;

use PHPUnit\Framework\TestCase;
use dribes\MetarParser\Service\MetarFetcher;

class MetarFetcherTest extends TestCase
{
    public function testFetchValidOaci()
    {
        $fetcher = new MetarFetcher();
        $icao = 'KJFK'; // Example valid OACI code

        $data = $fetcher->fetch($icao);

        // debug
        //var_dump($data);
        $this->assertIsArray($data);
        $this->assertNotEmpty($data);
        $this->assertStringContainsString($icao, $data[1]);
    }

}