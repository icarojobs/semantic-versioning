<?php

declare(strict_types=1);

namespace Tiojobs\SemanticVersioning\Utils;

class DateTime
{
    public static function now(): int
    {
        return date('d/m/Y H:i:s');
    }
}
