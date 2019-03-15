<?php
class Model {
    private $pdo;
    private $server;
    private $username;
    private $password; 
    private $database; 
    
  function __construct(){
    $config = parse_ini_file('config.ini'); 
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
}
?>
