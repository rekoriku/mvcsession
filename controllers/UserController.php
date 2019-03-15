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

    function insert($user, $pwd, $pri, $id, $description)
    {
        $this->user->username = $user;
        $this->user->pwd = $pwd;
        $this->user->pri = $pri;
        $this->user->id = $id;
        $this->user->description = $description;
        return $this->user->insert();
    }
  
    function update($user, $pwd, $pri, $id, $description)
    {
        $this->user->username = $user;
        $this->user->pwd = $pwd;
        $this->user->pri = $pri;
        $this->user->id = $id;
        $this->user->description = $description;
        return $this->user->update();
    }
}
?>