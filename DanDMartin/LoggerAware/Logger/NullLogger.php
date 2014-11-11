<?php
namespace DanDMartin\LoggerAware\Logger;

use Psr\Log\LoggerInterface as PsrLogger;

class NullLogger implements PsrLogger
{
    public function emergency($message, array $context = array())
    {
        return null;
    }
    public function alert($message, array $context = array())
    {
        return null;
    }
	public function critical($message, array $context = array())
    {
        return null;
    }
	public function error($message, array $context = array())
    {
        return null;
    }
	public function warning($message, array $context = array()) 
    {
        return null;
    }
	public function notice($message, array $context = array()) 
    {
        return null;
    }
    public function info($message, array $context = array()) 
    {
        return null;
    }
    public function debug($message, array $context = array()) 
    {
        return null;
    }
    public function log($level, $message, array $context = array()) 
    {
        return null;
    }
}
