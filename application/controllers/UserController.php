<?php

namespace controllers;

/**
 * @user controller
 */
class UserController
{
  public  $modelUser;
  public function __construct()
  {
    //get user model
    $this->modelUser = new \models\UserModel();
  }
  public function login()
  {
    //display page login
    \app\Render::display('login');
  }

  public function register()
  {
    //display page register
    if (isset($_SESSION)) {
      \app\Render::display('register');
    } else {
      \app\Http::redirect('UserController', 'login');
    }
  }
  public function auth()
  {
    //authentification user
    if (isset($_POST['username']) && isset($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
    } else {
      $username = '';
      $password = '';
    }
    /**
     * get data from database the user correpond username & password
     * @return array
     */
    $data['data'] = $this->modelUser->getUser($username, $password);

    if ($data['data']) {
      session_start();
      $_SESSION['username'] = $_POST['username'];
      //test if user connected
      if (isset($_SESSION['username'])) {
        \app\Http::redirect('Home', 'dashboard');
      } else {
        \app\Render::display('404/error');
      }
    } else {
      \app\Render::display('404/error');
    }
  }

  

  public function logout()
  {
    //log out
    session_start();
    session_destroy();
    $_POST['username'] = '';
    $_POST['password'] = '';
    \app\Http::redirect('UserController', 'login');
  }
}
