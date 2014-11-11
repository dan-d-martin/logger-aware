<?php
namespace DanDMartin\LoggerAware\Traits;

use Psr\Log\LoggerInterface as PsrLogger;
use DanDMartin\LoggerAware\Logger\NullLogger;

trait LoggerAware
{
	protected $logger;

	public function setLogger(PsrLogger $l)
	{
		$this->logger = $l;
	}

	public function getLogger()
	{
		if(is_null($this->logger)) {
			$this->logger = new NullLogger();
		}
		return $this->logger;
	}
}
