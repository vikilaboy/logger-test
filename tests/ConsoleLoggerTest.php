<?php

namespace Elnino\Logger\Tests;

use Elnino\Logger\ConsoleLogger;
use Elnino\Logger\LogLevel;

class ConsoleLoggerTest extends LoggerTestCase
{
    public function testDoesNotLogWhenWrongLevel(): void
    {
        $logger = new ConsoleLogger(LogLevel::INFO);

        $this->assertEmptyLoggerOutputWhenWrongLogLevel($logger);
    }

    public function testLogMessage(): void
    {
        $logger = new ConsoleLogger(LogLevel::INFO);

        $output = $this->captureOutput(fn() => $logger->log('foo', LogLevel::INFO));

        static::assertSame('Console log: foo', $output);
    }
}
