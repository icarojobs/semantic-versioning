<?php

declare(strict_types=1);

namespace Tiojobs\SemanticVersioning\Utils;

class DateTime
{
    public static function now(): string
    {
        return date('d/m/Y H:i:s');
    }
}
