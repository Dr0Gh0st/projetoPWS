<?php

require_once './controllers/BaseAuthController.php';

class BOController extends BaseAuthController
{
    public function index(){
        $this ->loginFilterByRole(['admin', 'funcionario']);
        $this -> makeView('bo', 'index');
    }
}