<?php

require_once 'VendingMachine.php';

class Coffee extends VendingMachine
{
    protected function getName()
    {
        return 'coffee';
    }

    protected function getPrice()
    {
        return 120;
    }
}
