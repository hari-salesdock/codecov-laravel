<?php

namespace Tests\Unit;

use App\Lib\UrlDecoder;
use PHPUnit\Framework\TestCase;

class UrlDecoderTest extends TestCase
{
    public function testGetHost(): void
    {
        $decoder = new UrlDecoder('https://example.com');
        $this->assertEquals('example.com', $decoder->getHost());
    }
}
