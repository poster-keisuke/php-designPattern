<?php

require 'UserListIteratorInterface.php';

class UserListIterator implements UserListIteratorInterface
{
    private $users;
    private $index = 0;

    function __construct($users)
    {
        $this->users = $users;
    }

    public function hasNext()
    {
        return isset($this->users[$this->index]);
    }

    public function next()
    {
        return $this->users[$this->index++];
    }
}
