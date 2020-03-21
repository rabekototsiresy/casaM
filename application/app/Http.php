<?php
namespace app;
/**
 * specifies link http action
 */
 class Http{
   public static function redirect($controllerName,$task)
   {
    header("Location:http://localhost/casaM/index.php?controller=$controllerName&task=$task");
   }
 }