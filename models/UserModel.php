<?php
class UserModel extends Model
{
  public $user = "";
  public $pwd = "";
  public $pri = "";
  public $id = "";
  public $description = "";


  function getUser($person) {
    return $this->query("SELECT * FROM serverside19_persons WHERE fname='$person'")->fetch(PDO::FETCH_ASSOC);
  }

  function insert() {
      if(!empty($user) && !empty($pwd) && !empty($pri) && !empty($id) && !empty($description))
      {
        try{
            $this->pdo->beginTransaction();
            $this->query("INSERT INTO serverside19_users (user, pwd, pri, id, description) VALUES ('$user', '$pwd', '$pri', '$id', '$description')");
            $this->pdo->commit();
          }
          catch(Exception $ex){
            echo $ex->getMessage();
            $this->pdo->rollBack();
          }
      }
  }

  function update() {
    if(!empty($user) && !empty($pwd) && !empty($pri) && !empty($id) && !empty($description))
    {
        try{
        $this->pdo->beginTransaction();
        $this->query("UPDATE serverside19_users SET user='$user', id='$id', description='$description' WHERE id='$id'");
        $this->pdo->commit();
        } 
        catch(Exception $ex){
        echo $ex->getMessage();
        $this->pdo->rollBack();
        }
    }
  }

  function delete($id)
  {
      if(!empty($id))
      {
        try{
            $this->pdo->beginTransaction();
            $this->query("DELETE FROM serverside19_persons WHERE id ='$id'");
            $this->pdo->commit();
          }
          catch(Exception $ex){
            echo $ex->getMessage();
            $this->pdo->rollBack();
          }
        }
      }
}