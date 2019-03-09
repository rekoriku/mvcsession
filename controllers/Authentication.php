<?php
class Authentication extends Base {
  private $user;
  private $pass;


function __construct($db){
  parent::__construct($db);
}

function login(){
  //check if all posted values are true and if so set the variables
  $isset = $this->issetAll(["username","password","form"]);
  $isempty = $this->isEmptyAny(["username","password"]);
  
  if($isset == true && $isempty == false){
    $this->setLoginVars();
    $this->validateUser();
  } 
}

private function setLoginVars(){
  $this->user = $_POST["username"];          //Users posted username
  $this->pass = $_POST["password"];          //Users posted password
}

private function validateUser(){
  if($this->userExist($this->user) && $this->passValid($this->user,$this->pass)){
    $_SESSION["username"] = $this->user;
    $_SESSION["login"] = true;
    header("Location: links.php");
  } else {
    echo "Wrong username or password";
  }
}

}
?>