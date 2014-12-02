<?php
namespace DanDMartin\LoggerAware\Logger;

use Psr\Log\LoggerInterface as PsrLogger;

class ErrorLogLogger implements PsrLogger
{
    public function emergency($message, array $context = array())
    {
        error_log("[logger] " . $message."\n");
    }
    public function alert($message, array $context = array())
    {
        error_log("[logger] " . $message."\n");
    }
	public function critical($message, array $context = array())
    {
        error_log("[logger] " . $message."\n");
    }
	public function error($message, array $context = array())
    {
        error_log("[logger] " . $message."\n");
    }
	public function warning($message, array $context = array()) 
    {
        error_log("[logger] " . $message."\n");
    }
	public function notice($message, array $context = array()) 
    {
        error_log("[logger] " . $message."\n");
    }
    public function info($message, array $context = array()) 
    {
        error_log("[logger] " . $message."\n");
    }
    public function debug($message, array $context = array()) 
    {
        error_log("[logger] " . $message."\n");
    }
    public function log($level, $message, array $context = array()) 
    {
        error_log("[logger] " . $message."\n");
    }
}
