<?php
/*PHP中的重载指的是动态的创建属性与方法，是通过魔术方法来实现的。属性的重载通过__set，__get，__isset，__unset来分别实现对不存在属性的赋值、读取、判断属性是否设置、销毁属性。*/
class Car {
    private $ary = array();

    public function __set($key, $val) {
        $this->ary[$key] = $val;
    }

    public function __get($key) {
        if (isset($this->ary[$key])) {
            return $this->ary[$key];
        }
        return null;
    }

    public function __isset($key) {
        if (isset($this->ary[$key])) {
            return true;
        }
        return false;
    }

    public function __unset($key) {
        unset($this->ary[$key]);
    }
}
$car = new Car();
$car->name = '汽车';  //name属性动态创建并赋值
echo $car->name;

/*方法的重载通过__call来实现，当调用不存在的方法的时候，将会转为参数调用__call方法，当调用不存在的静态方法时会使用__callStatic重载。*/
class Car1 {
    public $speed = 0;

    public function __call($name, $args) {
        if ($name == 'speedUp') {
            $this->speed += 10;
        }
    }
}
$car1 = new Car1();
$car1->speedUp(); //调用不存在的方法会使用重载
echo $car1->speed;
?>