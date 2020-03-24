<?php
namespace controllers;
class Clients{
  public function add()
  {
    session_start();
    \app\Render::display('clients/add');
  }
}