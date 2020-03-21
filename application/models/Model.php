<?php

namespace models;
class Model{
  public $pdo;

  public function __construct()
  {
    //get instance PDO class
    $this->pdo = \app\Database::getPdo();
  }
}
