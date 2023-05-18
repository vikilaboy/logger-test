<?php

namespace Elnino\Logger\Tests;

use Elnino\Logger\ChainLogger;
use Elnino\Logger\LoggerInterface;
use Elnino\Logger\LogLevel;
use PHPUnit\Framework\TestCase;

class ChainLoggerTest extends TestCase
{
    public function testCallsAllLoggers(): void
    {
        $realLogger = $this->createMock(LoggerInterface::class);
        $realLogger
            ->expects(static::exactly(2))
            ->method('log')
            ->with('foo', LogLevel::DEBUG);
        $logger = new ChainLogger([$realLogger, $realLogger]);

        $logger->log('foo', LogLevel::DEBUG);
    }
}
