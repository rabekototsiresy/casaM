<?php

namespace models;


/**
 * @User model
 */
class UserModel
{
  public $pdo;
  public function __construct()
  {
    //get instance PDO class
    $this->pdo = \Database::getPdo();
  }
  public function getUser($username,$password)
  {
    /**
     * get One user from database 
     * Filter by username and password
     */
    $query = $this->pdo->prepare('SELECT *  FROM users WHERE username =:username && password =:password');
    $query->execute([
      'username' => $username,
      'password' => $password
    ]);
    return $query->rowCount();
  }
}
