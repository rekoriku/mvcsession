<?php
class UserController 
{
    private $user;

    function __construct()
    {
        $this->user = new UserModel;
    }

    function getAll()
    {
        return $this->user->getAll();
    }

    function get(){
        return $this->user->getPerson('kalle');
    }

    function getPersonIDs()
    {
        
    }
}
?>