<?php
namespace controllers;
class Clients{
  public function add()
  {
    session_start();
    if (isset($_SESSION['username'])) {
      \app\Render::display('clients/add');
    } else {
      \app\Http::redirect('UserController', 'login');
    }
  }
}