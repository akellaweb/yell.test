<?php

/**
 * Created by PhpStorm.
 * User: ntellegend
 * Date: 29.06.2016
 * Time: 1:08
 */
class ShapeFactory
{
    public static function getShape($data)
    {
        if (!isset($data['type'])) {
            throw new Exception("type parameter expected.");
        }

        if (!isset($data['params'])) {
            throw new Exception("params parameter expected.");
        }

        return self::getClass($data['type'], $data['params']);
    }

    private static function getClass($shape, $params)
    {
        $Class = self::getName($shape);
        if (! class_exists($Class)) {
            throw new Exception("Class {$Class} not founded");
        }

        return new $Class($params);
    }

    private static function getName($name)
    {
        return ucfirst(strtolower($name));
    }
}
