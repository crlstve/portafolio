<?php
if ($_SERVER['SCRIPT_FILENAME'] == __FILE__) {
  header('Location: 404.php');
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

  public static function svg(){
    return "<svg class='stroke-black dark:stroke-[#475569]' width='2rem' height='2rem' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><g id='Interface / External_Link'><path id='Vector' d='M10.0002 5H8.2002C7.08009 5 6.51962 5 6.0918 5.21799C5.71547 5.40973 5.40973 5.71547 5.21799 6.0918C5 6.51962 5 7.08009 5 8.2002V15.8002C5 16.9203 5 17.4801 5.21799 17.9079C5.40973 18.2842 5.71547 18.5905 6.0918 18.7822C6.5192 19 7.07899 19 8.19691 19H15.8031C16.921 19 17.48 19 17.9074 18.7822C18.2837 18.5905 18.5905 18.2839 18.7822 17.9076C19 17.4802 19 16.921 19 15.8031V14M20 9V4M20 4H15M20 4L13 11' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'/></g></svg>";
  }
}
?>