<?php

namespace App\classes;
use App\classes\Home;
class Auth extends Home
{
    protected $userEmail;
    protected $userPassword;
    protected $adminEmail;
    protected $adminPass;



    public function __construct($post=null)
    {
        if ($post)
        {
            $this->userEmail = $post['user_email'];
            $this->userPassword = $post['user_pass'];
        }

    }

    public function login()
    {
       // echo $this->userEmail;
       // echo $this->userPassword;
       // exit();
        $this->adminEmail = 'admin@admin.com';
        $this->adminPass  = '123456';
        session_start();
        $_SESSION['name']= $this->index();
        if ($this->userEmail == $this->adminEmail && $this->userPassword == $this->adminPass)
        {
            //session_start();
            //$_SESSION['id'] = rand(10,1000);

            $_SESSION['name']=20;

          header('Location: action.php?pages=fileU');
        }
        else {
            return 'Sorry TRy Again!!';
        }
    }

    public function logout()
    {
//        session_start();
//        unset($_SESSION['id']);
        session_start();
        unset($_SESSION['name']);
        header('Location: action.php?pages=log_in');
    }
}