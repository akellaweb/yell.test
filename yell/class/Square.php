<?php

/**
 * Created by PhpStorm.
 * User: ntellegend
 * Date: 29.06.2016
 * Time: 0:04
 */
class Square implements Shape
{
    private $_x, $_x1;
    private $_y, $_y1;

    public function __construct($params)
    {
        if (!isset($params['x'])||!isset($params['y'])||!(isset($params['x1']))||!(isset($params['y1']))) {
            throw new Exception("Required params expected");
        }

        $this->_x = $params['x'];
        $this->_y = $params['y'];
        $this->_x1 = $params['x1'];
        $this->_y1 = $params['y1'];
    }

    public function draw($color, $border)
    {
        echo "Drawed Square";
    }
}
