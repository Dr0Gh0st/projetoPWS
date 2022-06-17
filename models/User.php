<?php

class User extends ActiveRecord\Model
{
    static array $validates_presence_of = array(
        array('username'),
        array('passeword'),
        array('email'),
        array('role')
    );

    static $has_many = array(
        array('faturas')
    );
}