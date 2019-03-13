<?php
class Authentication {

function login(){
  //check if all posted values are true and if so set the variables
  $isset = Helper::issetAll(["username","password","form"]);
  $isempty = Helper::isEmptyAny(["username","password"]);
  
  
  if($isset == true && $isempty == false){
    $this->validateUser($_POST["username"],$_POST["password"]);
  }
}


private function validateUser($username,$password){
  $user = new UserController;
  if($user->userExist($username) && $user->passValid($username,$password)){
    Session::set("username",$username);
    Session::set("login",true);
    header("Location: person/getForm.php");
  } else {
    echo "Wrong username or password";
  }
}


}
?>