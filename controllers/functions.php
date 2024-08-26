<?php
if ($_SERVER['SCRIPT_FILENAME'] == __FILE__) {
  header("Location: 404.php");
  exit;
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Functions {
  public static function partial($partial){
    require_once('./views/partials/' . $partial . '.php');
  }

  public static function style($style){
    include_once('./assets/css/' . $style . '.php');
  }
}
?>