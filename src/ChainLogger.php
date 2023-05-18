<?php

declare(strict_types=1);

namespace Elnino\Logger;

final readonly class ChainLogger implements LoggerInterface
{
    /**
     * @param LoggerInterface[] $loggers
     */
    public function __construct(private array $loggers)
    {
    }

    public function log(string $message, LogLevel $level): void
    {
        foreach ($this->loggers as $logger) {
            $logger->log($message, $level);
        }
    }
}
