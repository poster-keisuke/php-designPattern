<?php

interface LoggerInterface
{
    /**
     * ログを記録する
     * 
     * @param string $log
     * @retern $this
     */
    public function log(string $log);
}
