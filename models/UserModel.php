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
        return $this->query("SELECT * FROM serverside19_users WHERE user='$name'")->fetchAll(PDO::FETCH_ASSOC);
    }

    function insert() {
        //if(!empty($this->user) && !empty($this->pwd) && !empty($this->pri) && !empty($this->id) && !empty($this->description)) {
            return $this->query("INSERT INTO serverside19_users (user, pwd, pri, id, description) VALUES ('$this->user', '$this->pwd', '$this->pri', '$this->id', '$this->description')");
        //}
    }

    function update() {
        if(!empty($this->user)) {
            return $this->query("UPDATE serverside19_users SET user='$this->user', id='$this->id', pri='$this->pri', description='$this->description' WHERE user='$this->user'");
        }
    }

    public function delete($user) {
        if(!empty($user)){
            return $this->query("DELETE FROM serverside19_users WHERE user ='$user'");
        }
    }

    function passValid($username,$password){
        $this->username = $username;
        return md5($password) == $this->getUser()['pwd']; //check if password is correct 
    }

    function userExist($username){
        $this->username = $username;
        return $username == $this->getUser()['user'];    //check if user exists in database
    }

    
}