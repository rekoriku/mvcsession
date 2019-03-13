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

    function passValid($username,$password){
        $this->user->username = $username;
        return md5($password) == $this->user->getUser()['pwd']; //check if password is correct 
    }

    function userExist($username){
        $this->user->username = $username;
        return $username == $this->user->getUser()['user'];    //check if user exists in database
    }

    function getPersonIDs()
    {
        
    }








}
?>