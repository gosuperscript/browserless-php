<?php
declare(strict_types=1);

namespace Superscript\Browserless\Requests;

use JsonSerializable;

final readonly class PdfOptions implements JsonSerializable
{
    public function __construct(
        public ?float $scale = null,
        public ?bool $displayHeaderFooter = null,
        public ?string $headerTemplate = null,
        public ?string $footerTemplate = null,
        public ?bool $printBackground = null,
        public ?bool $landscape = null,
        public ?bool $pageRanges = null,
        public ?PageFormat $format = null,
        public string|int|null $width = null,
        public string|int|null $height = null,
        public ?bool $preferCSSPageSize = null,
        public ?PageMargin $margin = null,
        public ?string $path = null,
        public ?bool $omitBackground = null,
        public ?bool $tagged = null,
        public ?bool $outline = null,
        public ?int $timeout = null,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return array_filter(get_object_vars($this));
    }
}
