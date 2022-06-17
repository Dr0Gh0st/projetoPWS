<?php

class Iva extends ActiveRecord\Model
{
    static array $validates_presence_of = array(
        array('id'),
        array('percentagem'),
        array('descricao'),
        array('vigor')
    );

    static $has_many = array(
        array('produtos')
    );
}