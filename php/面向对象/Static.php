<?php
/*静态属性与方法可以在不实例化类的情况下调用，直接使用类名::方法名的方式进行调用。静态属性不允许对象使用->操作符调用。*/
/*静态方法中，$this伪变量不允许使用。可以使用self，parent，static在内部调用静态方法与属性。*/
class Car {
    private static $speed = 10;

    public static function getSpeed() {
        return self::$speed;
    }

    public static function speedUp() {
        return self::$speed+=10;
    }
}
class BigCar extends Car {
    public static function start() {
        parent::speedUp();
    }
}

BigCar::start();
echo BigCar::getSpeed();
?>