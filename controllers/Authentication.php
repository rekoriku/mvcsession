<?php
class Authentication {
  private $user;
  private $secret = 'viisistasataa';
    function __construct() {
      $this->user = new UserModel;
    }

function login(){
  //check if all posted values are true and if so set the variables
  $isset = Helper::issetAll(["username","password","form"]);
  $isempty = Helper::isEmptyAny(["username","password"]);
  
  
  if($isset == true && $isempty == false){
    $this->validateUser($_POST["username"],$_POST["password"]);
  }
}

function logout(){
    Session::start();
    Session::stop();
    header("location: http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/");
  }


function validSess() {
  if(Session::issetSes('username')&& Session::issetSes('login')){
    return md5($this->user->getUser(Session::get('username'))['user'] + $this->secret) == Session::get("login");
  } else {
    return false;
  }
  
}

function priority(){
  if($this->validSess()) {
    return $this->user->getUser(Session::get('username'))['pri'];
  } else {
    return -1;
  }
}

 function validateUser($username,$password){
  if($this->user->userExist($username) && $this->user->passValid($username,$password)){
    Session::set("username",$username);
    Session::set("login",md5($username+ $this->secret));
    header("Location: person/getForm.php");
  } else {
    echo "Wrong username or password";
  }
}

}
?>