<?php

declare(strict_types=1);

namespace Elnino\Logger;

abstract readonly class AbstractLogger implements LoggerInterface
{
    public function __construct(private LogLevel $minimumLevel)
    {
    }

    public function log(string $message, LogLevel $level): void
    {
        if (!$this->shouldLog($level)) {
            return;
        }

        $this->doLog($message);
    }

    protected function shouldLog(LogLevel $level): bool
    {
        return $level->value >= $this->minimumLevel->value;
    }

    abstract protected function doLog(string $message): void;
}
