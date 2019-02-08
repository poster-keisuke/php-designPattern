<?php

class Application
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function error(string $message)
    {
        $this->logger->log($message);
    }
}