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

    function get($name){
        return $this->user->getUser($name);
    }

    function getAllUsers($name)
    {
        return $this->user->getAllUsers($name);
    }

    function getPersonIDs()
    {
        
    }



}
?>