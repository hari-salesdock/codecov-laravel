<?php

namespace App\Lib;

class UrlDecoder
{
    protected array $parsedUrl;

    public function __construct(string $url)
    {
        $this->parsedUrl = parse_url($url);
    }

    public function getHost(): ?string
    {
        if (!isset($this->parsedUrl['host'])) {
            return null;
        }

        return $this->parsedUrl['host'];
    }
}
