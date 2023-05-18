<?php

declare(strict_types=1);

namespace Elnino\Logger;

final readonly class EmailLogger extends AbstractLogger
{
    public function __construct(LogLevel $minimumLevel, private string $email)
    {
        parent::__construct($minimumLevel);
    }

    public function doLog(string $message): void
    {
        echo "Sending email to {$this->email} with log: {$message}";
    }
}
