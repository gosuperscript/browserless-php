<?php
declare(strict_types=1);

namespace Superscript\Browserless\Requests;

use JsonSerializable;

final readonly class PageMargin implements JsonSerializable
{
    public function __construct(
        public int|string $top,
        public int|string $right,
        public int|string $bottom,
        public int|string $left,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}
