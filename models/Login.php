<?php

    class Login
    {
        public function __construct()
        {

            if (session_status() != PHP_SESSION_ACTIVE)
            {
                session_start();
            }

        }

        public function checkLogin($name, $password)
        {
            if($name == "admin" && $password == "qwert")
            {
                $_SESSION['username'] = $name;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function isLoggedIn()
        {
            return isset($_SESSION['username']);
        }

        public function Logout()
        {
            session_destroy();
            header('Location: router.php?c=site&a=index');
        }

        public function getUsername()
        {
            if (isset($_SESSION['username'])){
                return $_SESSION['username'];
            }
            else
            {
                return null;
            }
        }
    }