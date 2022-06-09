<?php

class Produto extends \ActiveRecord\Model
{
    static array $validates_presence_of = array(
        array('id'),
        array('referencia'),
        array('descricao'),
        array('preco'),
        array('stock')
    );

    static $belongs_to = array(
        array('ivas')
    );
}