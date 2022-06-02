<?php

require_once './controllers/BaseAuthController.php';

class BOController extends BaseAuthController
{
    public function index(){
        $this -> loginFilter();
            $this -> makeViewBO('backo', 'index');
    }

    public function funcionario(){
        $this -> loginFilter();
        $this -> loginFilterByRole('admin, funcionario');
            $this -> makeViewBO('backo', 'funcionario');
    }

    public function admin(){
        $this -> loginFilter();
        $this -> loginFilterByRole('admin');
        $this -> makeViewBO('backo', 'admin');
    }
}