<?php
class UserModel extends Model
{
  public $user = "";
  public $pwd = "";
  public $pri = "";
  public $id = "";
  public $description = "";
    
    public static function getUsername($person) {
        return self::query("SELECT * FROM serverside19_users WHERE user='$person'")->fetch(PDO::FETCH_ASSOC);
    }

    function insert() {
        if(!empty($this->user) && !empty($this->pwd) && !empty($this->pri) && !empty($this->id) && !empty($this->description)) {
            return $this->query("INSERT INTO serverside19_users (user, pwd, pri, id, description) VALUES ('$this->user', '$this->pwd', '$this->pri', '$this->id', '$this->description')");
        }
    }

    function update() {
        if(!empty($this->id)) {
            return$this->query("UPDATE serverside19_users SET user='$this->user', id='$this->id', description='$this->description' WHERE id='$this->id'");
        }
    }

    public function delete($user) {
        if(!empty($user)){
            return self::query("DELETE FROM serverside19_users WHERE user ='$user'");
        }
    }
}