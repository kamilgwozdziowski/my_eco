<?php

namespace My\Eco\Cron;

use Psr\Log\LoggerInterface;

class Eco {

  private LoggerInterface $logger;

  public function __construct(
    LoggerInterface $logger
  ) {
    $this->logger = $logger;
  }

  public function execute()
  {
    $this->logger->info('Logger CRON Eco');

    return $this;
  }
}