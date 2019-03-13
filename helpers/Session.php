<?php
class Session {

  public static function isset($val){
    return isset($_SESSION[$val]);
  }

  public static function set($val1,$val2){
    $_SESSION[$val1] = $val2;
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