<?php


namespace App\classes;


class Home
{
    protected $ses;
 public function index()
 {
     session_start();
     unset($_SESSION['user']);

     header('Location: action.php?pages=home');
     return $_SESSION ['user'];

 }

}