<?php
declare(strict_types=1);

namespace Superscript\Browserless\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Http\Request;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

final class GetPdfRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        private ?string $html = null,
        private ?string $url = null,
        private ?PdfOptions $options = null,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/pdf';
    }

    protected function defaultBody(): array
    {
        return array_filter([
            'html' => $this->html,
            'url' => $this->url,
            'options' => $this->options,
        ]);
    }
}
