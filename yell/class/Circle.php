<?php

/**
 * Created by PhpStorm.
 * User: ntellegend
 * Date: 29.06.2016
 * Time: 0:02
 */
class Circle implements Shape
{
    private $_x, $_y;
    private $_r;

    public function __construct($params)
    {
        if (!isset($params['x'])||!isset($params['y'])||!(isset($params['r']))) {
            throw new Exception("Required params expected");
        }

        $this->_x = $params['x'];
        $this->_y = $params['y'];
        $this->_r = $params['r'];
    }

    public function draw($color, $border)
    {
        echo "Drawed Circle";
    }
}
