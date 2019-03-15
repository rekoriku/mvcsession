<?php
class Authentication {
  private $user;
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

// private function isLogged(){
//   if(Session::issetSes("username")){
//     //echo "You are not logged in!";
//     //exit();
//   }

//   if(Session::issetSes("username") && Session::issetSes("login")){

//   }
// }


function priority(){
  $this->user->getUser()['pri'];
}

 function validateUser($username,$password){
  if($this->user->userExist($username) && $this->user->passValid($username,$password)){
    $this->user->username = $username;
    $this->user->password = md5($password);
    Session::set("username",$username);
    Session::set("login",md5($username+'viisistasataa'));
    header("Location: person/getForm.php");
  } else {
    echo "Wrong username or password";
  }
}



//require_once '.php';

//check if session variable is set
// if(!isset($_SESSION["username"])) {
//   echo "You are not logged in!";
//   exit();
// }

// //check if current session user exists
// if(isset($_SESSION["username"]) && isset($_SESSION["login"])) {
//   $dbuser = $db->getUser($_SESSION["username"])['user'];
//   if($_SESSION["username"] == $dbuser && $_SESSION["login"] == true) {

//   }else{
//     echo "Wrong username or password!";
//     exit();
//   }
  
//    //header("Location: info.php");
// }else {
//   echo "You are not logged in!";
//   exit();
// }
// 


}
?>