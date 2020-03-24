<?php 
namespace controllers;
class Home{
  public function dashboard()
  {
    session_start();
    if (isset($_SESSION['username'])) {\app\Render::display('dashboard'  ); 
    } else {
      \app\Http::redirect('UserController', 'login');
    }
  }
}