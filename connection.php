<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($class_name) {
  $path = __DIR__;
  $directories = ["$path/models/", "$path/controllers/"];
  foreach ($directories as $directory) {
    if(file_exists($directory.$class_name.'.php')){
      require $directory.$class_name.'.php';
    }
    
  }
});

//$config = parse_ini_file("config.ini"); // Get database information from ini file
//$db = new Model();              // Create new object from the Sqlcon class
session_start();
 