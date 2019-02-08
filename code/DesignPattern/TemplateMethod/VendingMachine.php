<?php

abstract class VendingMachine
{
    abstract protected function getName();
    abstract protected function getPrice();

    public function buy($money)
    {
        if ($this->getPrice() > $money) {

            echo '金額が不足しております。';

        } else {

            echo $this->getName();

        }
    }
}
