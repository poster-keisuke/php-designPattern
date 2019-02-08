<?php

require "LoggerInterface.php";

class ExsampleLogger implements LoggerInterface
{
    /**
     * ログを記録する
     * 
     * @param string $log
     * @return $this
     */
    public function log(string $log)
    {
        echo $log;
        return $this;
    }
}