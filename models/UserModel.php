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
            return $this->query("INSERT INTO serverside19_users (user, pwd, pri, id, description) VALUES ('$user', '$pwd', '$pri', '$id', '$description')");
          }
        }
    
      function update() {
        if(!empty($this->id)) {
            return$this->query("UPDATE serverside19_users SET user='$user', id='$id', description='$description' WHERE id='$id'");
        }
      }
    
      public static function delete($id) {
        if(!empty($id)){
          return self::query("DELETE FROM serverside19_users WHERE id ='$id'");
        }
      }
}