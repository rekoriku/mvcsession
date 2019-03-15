<?php
class UserModel extends Model
{
  public $username = "";
  public $pwd = "";
  public $pri = "";
  public $id = "";
  public $description = "";
    
    public function getAll()
    {
        return $this->query("SELECT * FROM serverside19_users")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUser($name) {
        return $this->query("SELECT * FROM serverside19_users WHERE user='$name'")->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllUsers($name)
    {
        return $this->query("SELECT * FROM serverside19_users WHERE user='$name'")->fetchAll(PDO::FETCH_ASSOC);
    }

    function insert() {
        return $this->query("INSERT INTO serverside19_users (user, pwd, pri, id, description) VALUES ('$this->username', md5('$this->pwd'), '$this->pri', '$this->id', '$this->description')");
    }

    function update() {
        return $this->query("UPDATE serverside19_users SET user='$this->username', pwd=md5('$this->pwd'), pri='$this->pri', id='$this->id', description='$this->description' WHERE user='$this->username'");
    }

    public function delete($user) {
        if(!empty($user)){
            return $this->query("DELETE FROM serverside19_users WHERE user ='$user'");
        }
    }

    function passValid($username,$password){
        return md5($password) == $this->getUser($username)['pwd']; //check if password is correct 
    }

    function userExist($username){
        return $username == $this->getUser($username)['user'];    //check if user exists in database
    }
}