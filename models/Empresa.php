<?php

class Empresa extends \ActiveRecord\Model
{
    static array $validates_presence_of = array(
        array('id'),
        array('degsocial'),
        array('email'),
        array('telefone'),
        array('nif'),
        array('morada'),
        array('codpostal'),
        array('localidade'),
        array('capsocial')
    );
}