<?php

namespace controllers;

/**
 * @user controller
 */
class User
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
    if (isset($_SESSION['username'])) {
      \app\Render::display('register');
    } else {
      \app\Http::redirect('User', 'login');
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
    \app\Http::redirect('User', 'login');
  }

/**
 * display add user
 */
  public function add()
  {
    session_start();
    $data = [];
    $allUsers = $this->modelUser->getAllUsers();
    $data['allUsers'] = $allUsers;
    if (isset($_SESSION['username'])) {
      \app\Render::display('clients/add',$data);
    } else {
      \app\Http::redirect('User', 'login');
    }
  }


  public function create()
  {
    session_start();
    $allUsers = $this->modelUser->getAllUsers();
    
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $categorie = isset($_POST['categorie'])? $_POST['categorie'] : '';
    $checkPassword = isset($_POST['checkPassword']) ? $_POST['checkPassword'] : '';
    $data = [];
    if(!empty( $username) && !empty($password) && !empty($categorie) && !empty($checkPassword) && $password === $checkPassword)
    {
      $this->modelUser->create($username,$password,$categorie);
      $success = "<div class='alert alert-success'>ajout avec success !!!</div>";
     $data['success'] =  $success;
     $data['allUsers'] = $allUsers;
      //\app\Render::display('clients/add',$data);
      \app\Http::redirect('User', 'add');
    }elseif(empty( $username)|| empty($password) || empty($categorie) || empty($checkPassword))
    {
      $nonRempli = "<div class='alert alert-danger'>remplissez bien le champ !!!</div>"; 
      $data = ['nonRempli' => $nonRempli];
      $data['allUsers'] = $allUsers;
      \app\Http::redirect('User', 'add');
      //\app\Render::display('clients/add',$data);
    }elseif(!empty( $username) && !empty($password) && !empty($categorie) && !empty($checkPassword) && $password != $checkPassword)
    {
      $errorPassword = "<div class='alert alert-danger'>verfier le mot de passe!!!</div>"; 
      $data = ['nonRempli' => $errorPassword];
      $data['allUsers'] = $allUsers;
      \app\Http::redirect('User', 'add');
      //\app\Render::display('clients/add',$data);
    }
    
    
  }
/**
 * delete user
 */
  
  
  public function delete()
    {
    
      $id=$_GET['id'];

      $this->modelUser->delete($id);
      \app\Http::redirect('User', 'add');
    }







}
