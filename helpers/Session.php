<?php
class Session {

  public static function isset($val){
    isset($_SESSION[$val]);
  }

  public static function start(){
    session_start();
  }

  public static function stop(){
    session_destroy();
  }

  public static function remove($val){
    unset($_SESSION[$val]);
  }

}

?>