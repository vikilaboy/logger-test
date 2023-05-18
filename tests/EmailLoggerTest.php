<?php

namespace Elnino\Logger\Tests;

use Elnino\Logger\EmailLogger;
use Elnino\Logger\LogLevel;

class EmailLoggerTest extends LoggerTestCase
{
    public function testDoesNotLogWhenWrongLevel(): void
    {
        $logger = new EmailLogger(LogLevel::INFO, 'user@email.com');

        $this->assertEmptyLoggerOutputWhenWrongLogLevel($logger);
    }

    public function testLogMessage(): void
    {
        $logger = new EmailLogger(LogLevel::INFO, 'user@email.com');

        $output = $this->captureOutput(fn() => $logger->log('foo', LogLevel::INFO));

        static::assertSame('Sending email to user@email.com with log: foo', $output);
    }
}
