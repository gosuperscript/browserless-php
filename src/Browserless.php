<?php
declare(strict_types=1);

namespace Superscript\Browserless;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

final class Browserless extends Connector
{
    use AlwaysThrowOnErrors;

    public function __construct(
        private string $baseUrl = 'https://production-lon.browserless.io',
        private ?string $token = null,
        private ?int $timeout = null,
    ) {
    }

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

    protected function defaultQuery(): array
    {
        return array_filter([
            'token' => $this->token,
            'timeout' => $this->timeout,
        ]);
    }
}
