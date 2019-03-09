<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  spl_autoload_register(function ($class_name) {
    $name = strtolower($class_name);
    require "class/$name.php";
  });

  $config = parse_ini_file("config.ini"); // Get database information from ini file
  $db = new Sqlcon($config);              // Create new object from the Sqlcon class
  session_start();
?>