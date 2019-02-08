<?php

require "UsersAggregateInterface.php";
//require  "UserListIterator.php";
require  "UserReverseListIterator.php";

class UsersAggregate implements UsersAggregateInterface
{
    private $userList;

    function __construct($users)
    {
        $this->userList = $users;
    }

    public function addUsersList($user)
    {
        $this->userList[] = $user;
    }

    public function getUserList()
    {
        return $this->userList;
    }

    public function createIterator()
    {
        return new UserReverseListIterator($this->userList);
    }
}
