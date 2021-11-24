<?php
namespace DanDMartin\LoggerAware\Logger;

use Psr\Log\LoggerInterface as PsrLogger;

class EchoLogger implements PsrLogger
{
    public function emergency(string|\Stringable $message, array $context = []): void
    {
        echo "[logger] " . $message."\n";
    }
	
    public function alert(string|\Stringable $message, array $context = []): void
    {
        echo "[logger] " . $message."\n";
    }
    
	public function critical(string|\Stringable $message, array $context = []): void
    {
        echo "[logger] " . $message."\n";
    }
    
	public function error(string|\Stringable $message, array $context = []): void
    {
        echo "[logger] " . $message."\n";
    }
    
	public function warning(string|\Stringable $message, array $context = []): void
    {
        echo "[logger] " . $message."\n";
    }
    
	public function notice(string|\Stringable $message, array $context = []): void
    {
        echo "[logger] " . $message."\n";
    }
    
    public function info(string|\Stringable $message, array $context = []): void
    {
        echo "[logger] " . $message."\n";
    }
    
    public function debug(string|\Stringable $message, array $context = []): void
    {
        echo "[logger] " . $message."\n";
    }
    
    public function log(string|\Stringable $message, array $context = []): void
    {
        echo "[logger] " . $message."\n";
    }
}
