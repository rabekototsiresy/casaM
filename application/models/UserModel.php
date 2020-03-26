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

  /**
 * create users
 */
public function create($username,$password,$categorie)
{
  /**
   *Insert user into table user 
   *
   */
  $query = $this->pdo->prepare('INSERT INTO users(username,password,categorie) VALUES(:username,:password,:categorie)');
  $query->execute(compact('username','password','categorie'));
}

public function getAllUsers()
{
  /**
   *@return array
   *get Alluser in the database users
   */
  $query = $this->pdo->query('SELECT *  FROM users');
  return $query->fetchAll();
}


/**
 * Delete users
 */
public function delete($id)
{
  $query = $this->pdo->prepare('DELETE  FROM users WHERE id =:id');
  $query->execute(compact('id'));
}




}
