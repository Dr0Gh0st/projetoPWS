<?php
    require_once './models/Login.php';
    include_once 'BaseController.php';

    class LoginController extends BaseController {
        public function index(){
            $this -> makeView('login', 'index');
        }

        public function login()
        {
            if (isset($_POST['username']) && isset($_POST['password']))
            {
                $name = $_POST['username'];
                $password = $_POST['password'];

                $l = new Login();
                $valid = $l -> checkLogin($name, $password);


                if ($valid)
                {
                    $this -> redirectRoute('site', 'index');
                }

                else
                {
                    $this -> redirectRoute('login', 'index');
                }
            }
        }

        public function logout(){
            $log = new Login();
            $log->Logout();
            $this -> redirectRoute('site','index');
        }
    }