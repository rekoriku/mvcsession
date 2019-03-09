<?php
require_once 'connection.php';

//check if session variable is set
if(!isset($_SESSION["username"])) {
  echo "You are not logged in!";
  exit();
}

//check if current session user exists
if(isset($_SESSION["username"]) && isset($_SESSION["login"])) {
  $dbuser = $db->getUser($_SESSION["username"])['user'];
  if($_SESSION["username"] == $dbuser && $_SESSION["login"] == true) {

  }else{
    echo "Wrong username or password!";
    exit();
  }
  
   //header("Location: info.php");
}else {
  echo "You are not logged in!";
  exit();
}
?>