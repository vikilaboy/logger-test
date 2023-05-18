<?php

declare(strict_types=1);

namespace Elnino\Logger;

final readonly class ConsoleLogger extends AbstractLogger
{
    public function doLog(string $message): void
    {
        echo "Console log: {$message}";
    }
}
