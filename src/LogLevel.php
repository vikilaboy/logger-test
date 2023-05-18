<?php

declare(strict_types=1);

namespace Elnino\Logger;

enum LogLevel: int
{
    case DEBUG = 0;
    case INFO = 1;
    case WARNING = 2;
    case ERROR = 3;
}
