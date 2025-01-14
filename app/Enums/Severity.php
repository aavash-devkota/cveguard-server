<?php

namespace App\Enums;

enum Severity: int
{
    case NOT_AFFECTED = 0;
    case LOW = 1;
    case MODERATE = 2;
    case HIGH = 3;
    case CRITICAL = 4;
}
