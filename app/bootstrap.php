<?php

// //load confing

require_once "config/config.php";


//AUTOLOAD core libraries

spl_autoload_register(function ($className) {
  require_once 'libraries/' . $className . '.php';
});
