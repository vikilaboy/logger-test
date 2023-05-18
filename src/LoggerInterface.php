<?php

declare(strict_types=1);

namespace Elnino\Logger;

interface LoggerInterface
{
    public function log(string $message, LogLevel $level): void;
}
