<?php
//evitar que se pueda acceder directamente al archivo
  if ($_SERVER['SCRIPT_FILENAME'] == __FILE__) {
    header('Location: 404.php');
    exit;
  }
//mostrar errores
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
//cookies de sesión seguras
  ini_set('session.cookie_httponly', 1);
  ini_set('session.cookie_secure', 1);
  ini_set('session.use_only_cookies', 1);
// cargar partials y estilos
class Functions {
  public static function partial($partial){
    require_once('./views/partials/' . $partial . '.php');
  }
  public static function svg(){
    return "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke-width=\"1\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon icon-tabler icons-tabler-outline  stroke-dark icon-tabler-arrow-narrow-right-dashed\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M5 12h.5m3 0h1.5m3 0h6\" /><path d=\"M15 16l4 -4\" /><path d=\"M15 8l4 4\" /></svg>";
  }

}
?>