<?php

class ClienteController extends BaseController
{
    public function index(){
        $this -> makeView('cliente', 'index');
    }
}