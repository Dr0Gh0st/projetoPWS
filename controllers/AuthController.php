<?php
    require_once './models/Auth.php';
    include_once 'BaseController.php';

    class AuthController extends BaseController {
        public function index(){
            $this -> makeView('login', 'index');
        }

        public function login()
        {
            if (isset($_POST['username']) && isset($_POST['password']))
            {
                $name = $_POST['username'];
                $password = $_POST['password'];

                $auth = new Auth();
                $valid = $auth -> checkLogin($name, $password);

                if ($valid)
                {
                    $this -> redirectRoute( 'site', 'index');
                }

                else
                {
                    $this -> redirectRoute('login', 'index');
                }
            }
        }

        public function logout(){
            $auth = new Auth();
            $auth->Logout();
            $this -> redirectRoute('site','index');
        }
    }