<?php

/**
 * Created by PhpStorm.
 * User: ntellegend
 * Date: 29.06.2016
 * Time: 0:08
 */
class Triangle implements Shape
{
    private $_a, $_b, $_c;

    public function __construct($a, $b, $c)
    {
        if (!isset($params['a'])||!isset($params['b'])||!(isset($params['c']))) {
            throw new Exception("Required params expected");
        }

        $this->_a = $a;
        $this->_b = $b;
        $this->_c = $c;
    }

    public function draw($color, $border)
    {
        // TODO: Implement draw() method.
        echo "Drawed Triangle";
    }
}
