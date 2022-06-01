<?php

class User extends ActiveRecord\Model
{
    static array $validates_presence_of = array(
        array('username'),
        array('passeword'),
        array('email'),
        array('telefone'),
	    array('nif'),
        array('morada'),
        array('codpostal'),
        array('localidade'),
        array('role')
    );
}