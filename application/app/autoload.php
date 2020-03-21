<?php
/**
 * get class Name
 * require file class automatic
 */
spl_autoload_register(function($className){
  $className = str_replace("\\","/",$className);
  require_once("application/$className.php");
});