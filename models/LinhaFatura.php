<?php

class LinhaFatura extends \ActiveRecord\Model
{
    static array $validates_presence_of = array(
        array('id'),
        array('quantidade'),
        array('valor'),
        array('iva')
    );

    static $belongs_to = array(
        array('faturas'),
        array('produtos')
    );
}