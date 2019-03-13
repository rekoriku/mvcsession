<?php
class Authentication {

public static function login(){
  //check if all posted values are true and if so set the variables
  $isset = Helper::issetAll(["username","password","form"]);
  $isempty = Helper::isEmptyAny(["username","password"]);
  
  
  if($isset == true && $isempty == false){
    var_dump('hello');
    // $this->setLoginVars();
    $this->validateUser($_POST["username"],$_POST["password"]);
  } 
}

private function setLoginVars(){
  $this->user = $_POST["username"];          //Users posted username
  $this->pass = $_POST["password"];          //Users posted password
}

private function validateUser($username,$password){
  $user = new UserController;
  if($user->userExist($username) && $user->passValid($username,$password)){
    Session::set("username",$username);
    Session::set("login",true);
    // $_SESSION["username"] = $this->user;
    // $_SESSION["login"] = true;
    echo "toimii";
    //header("Location: links.php");
  } else {
    echo "Wrong username or password";
  }
}





}
?>