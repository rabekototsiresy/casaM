<?php

namespace app;

class Render
{
  public static function display($pageName, $variables = [])
  {
    /**
     * function display page
     */
    ob_start();
    extract($variables);
    require_once('application/views/' . $pageName . '.php');
    $content = ob_get_clean();
    require_once('templates/layout.php');
  }
}
