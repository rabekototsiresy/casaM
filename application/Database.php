<?php
class Database
{
/**
 * @Database class
 */
  public static function getPdo()
  {
    /**
     * Connect database mandroso
     * @return instace PDO
     */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mandroso";

    try {
      $pdo = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]);
    } catch (\PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
      $pdo = NULL;
    }
    return $pdo;
  }
}
