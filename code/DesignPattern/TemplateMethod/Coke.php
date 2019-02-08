<?php

require_once 'VendingMachine.php';

class Coke extends VendingMachine
{
    protected function getName()
    {
        return 'coke';
    }

    protected function getPrice()
    {
        return 150;
    }
}
