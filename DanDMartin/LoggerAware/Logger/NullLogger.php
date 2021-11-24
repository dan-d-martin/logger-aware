<?php
namespace DanDMartin\LoggerAware\Logger;

use Psr\Log\LoggerInterface as PsrLogger;

class NullLogger implements PsrLogger
{
    public function emergency(string|\Stringable $message, array $context = []): void
    {
        return;
    }
    public function alert(string|\Stringable $message, array $context = []): void
    {
        return;
    }
    public function critical(string|\Stringable $message, array $context = []): void
    {
        return;
    }
    public function error(string|\Stringable $message, array $context = []): void
    {
        return;
    }
    public function warning(string|\Stringable $message, array $context = []) : void
    {
        return;
    }
    public function notice(string|\Stringable $message, array $context = []): void
    {
        return;
    }
    public function info(string|\Stringable $message, array $context = []): void
    {
        return;
    }
    public function debug(string|\Stringable $message, array $context = []): void
    {
        return;
    }
    public function log(string|\Stringable $message, array $context = []): void
    {
        return;
    }
}
