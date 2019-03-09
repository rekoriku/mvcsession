<?php
class Model {
    private $pdo;
    private $server;
    private $username;
    private $password; 
    private $database; 
    
  function __construct($config){
    $this->server   = $config['server'];
    $this->username = $config['username'];
    $this->password = $config['password'];
    $this->database = $config['database'];

    $this->pdo = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username, $this->password);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function query($que){
    $query = $this->pdo->prepare($que);
    $query->execute();
    return $query;
  }


  function getUser($user){
    return $this->query("SELECT * FROM serverside19_users WHERE user='$user'")->fetch(PDO::FETCH_ASSOC);
  }

  function getAccount($user){
    return $this->query(
      "SELECT user, description, fname, sname, u.id FROM 
      serverside19_users AS u JOIN 
      serverside19_persons AS p ON u.id = p.id
      WHERE user like '$user'")->fetch(PDO::FETCH_ASSOC);
  }

  function insertUser($id, $fname, $sname, $user, $pwd, $pri, $description) {
    try{
      $this->pdo->beginTransaction();
      $this->query("INSERT INTO serverside19_persons (id, fname, sname) VALUES ('$id', '$fname', '$sname')");
      $this->query("INSERT INTO serverside19_users (user, pwd, pri, id, description) VALUES ('$user', '$pwd', '$pri', '$id', '$description')");
      $this->pdo->commit();
    }
    catch(Exception $ex){
      echo $ex->getMessage();
      $this->pdo->rollBack();
    }
  }

  function updateUser($id, $fname, $sname, $user, $description) {
    try{
      $this->pdo->beginTransaction();
      $this->query("UPDATE serverside19_persons SET id='$id', fname='$fname', sname='$sname' WHERE id='$id'");
      $this->query("UPDATE serverside19_users SET user='$user', id='$id', description='$description' WHERE id='$id'");
      $this->pdo->commit();
    } 
    catch(Exception $ex){
      echo $ex->getMessage();
      $this->pdo->rollBack();
    }
}

}


?>
