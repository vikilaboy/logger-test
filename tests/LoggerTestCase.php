<?php

namespace Elnino\Logger\Tests;

use Elnino\Logger\LoggerInterface;
use Elnino\Logger\LogLevel;
use PHPUnit\Framework\TestCase;

class LoggerTestCase extends TestCase
{
    protected function captureOutput(callable $callable): string
    {
        ob_start();
        $callable();

        return ob_get_clean();
    }

    protected function assertEmptyLoggerOutputWhenWrongLogLevel(LoggerInterface $logger): void
    {
        $output = $this->captureOutput(fn() => $logger->log('foo', LogLevel::DEBUG));

        static::assertEmpty($output);
    }
}
