<?php

require 'UserListIteratorInterface.php';

class UserReverseListIterator implements UserListIteratorInterface
{
    private $users;
    private $index;

    function __construct($users)
    {
        $this->users = $users;
        $this->index = $this->getIndex();
    }

    public function hasNext()
    {
        return isset($this->users[$this->index]);
    }

    public function next()
    {
        return $this->users[$this->index--];
    }

    private function getIndex()
    {
        return count($this->users ) -1;
    }
}
