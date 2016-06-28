<?php

/**
 * Created by PhpStorm.
 * User: ntellegend
 * Date: 29.06.2016
 * Time: 1:00
 */
class ShapeController
{
    private static $_instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (null===self::$_instance) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    public function draw($shapes)
    {
        if (empty($shapes) || count($shapes) < 1) throw new Exception("Nothing to draw.");

        foreach ($shapes as $shape) {
            $Shape = ShapeFactory::getShape($shape);
            if ($Shape instanceof Shape) {
                $Shape->draw($shape['color'], $shape['border']);
            }
        }
    }
}
