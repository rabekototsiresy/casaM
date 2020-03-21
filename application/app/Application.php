<?php
namespace app;
class Application{
  public static function process()
  {
    /**
     * Manage page
     */
    //get controller on the url
    $controllerName = $_GET['controller'];
    //get task on the url
    $task = $_GET['task'];
    $controller = "\controllers\\".$controllerName;
    //instance class
    $controllerName = new $controller();
    //execute task
    $controllerName->$task();
  }
}