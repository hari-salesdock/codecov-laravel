<?php

namespace Tests\Unit;

use App\Lib\UrlDecoder;
use PHPUnit\Framework\TestCase;

class UrlDecoderTest extends TestCase
{
    public function getHostProvider(): array
    {
        return [
            ['https://example.com', 'example.com'],
            ['not-url', null],
        ];
    }

    /**
     * @dataProvider getHostProvider
     */

    public function testGetHost(string $url, ?string $expectedHost): void
    {
        $decoder = new UrlDecoder($url);
        $this->assertEquals($expectedHost, $decoder->getHost());
    }


}
