<?php
declare(strict_types=1);

namespace Superscript\Browserless\Requests;

enum PageFormat : string
{
    case A0 = 'A0';
    case A1 = 'A1';
    case A2 = 'A2';
    case A3 = 'A3';
    case A4 = 'A4';
    case A5 = 'A5';
    case A6 = 'A6';
    case Ledger = 'Ledger';
    case Legal = 'Legal';
    case Letter = 'Letter';
    case Tabloid = 'Tabloid';
}
