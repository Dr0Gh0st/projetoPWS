<?php

class Fatura extends \ActiveRecord\Model
{
    static array $validates_presence_of = array(
        array('id'),
        array('data'),
        array('valortotal'),
        array('ivatotal'),
        array('estado')
    );

    static $has_many = array(
        array('linhafaturas')
    );

    static $belongs_to = array(
        array('user')
    );
}