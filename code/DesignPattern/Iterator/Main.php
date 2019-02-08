<?php

class Main
{
    private $userIterator;

    public function __construct(UsersAggregateInterface $user_list)
    {
        $this->userIterator = $user_list->createIterator();
    }

    public function getUsers()
    {
        while ($this->userIterator->hasNext()) {
            $user = $this->userIterator->next();
            echo sprintf('%s', $user);
        }
    }
}
