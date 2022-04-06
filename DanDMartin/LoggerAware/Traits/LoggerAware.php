<?php
namespace DanDMartin\LoggerAware\Traits;

use Psr\Log\LoggerInterface as PsrLogger;
use DanDMartin\LoggerAware\Logger\NullLogger;

trait LoggerAware
{
    /**
     * @var PsrLogger
     */
    protected $logger;

    /**
     * @param PsrLogger $l
     * @required
     */
    public function setLogger(PsrLogger $l): void
    {
        $this->logger = $l;
    }

    /**
     * @return PsrLogger
     */
    public function getLogger(): PsrLogger
    {
        if(is_null($this->logger)) {
            $this->logger = new NullLogger();
        }
        return $this->logger;
    }
}
