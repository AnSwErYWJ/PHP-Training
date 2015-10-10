<?php
/*对象比较，当同一个类的两个实例的所有属性都相等时，可以使用比较运算符==进行判断，当需要判断两个变量是否为同一个对象的引用时，可以使用全等运算符===进行判断*/
class Car {
}
$a = new Car();
$b = new Car();
if ($a == $b) echo '==';   //true
if ($a === $b) echo '==='; //false

/*对象复制，在一些特殊情况下，可以通过关键字clone来复制一个对象，这时__clone方法会被调用，通过这个魔术方法来设置属性的值。*/
class Car1 {
    public $name = 'car';

    public function __clone() {
        $obj = new Car();
        $obj->name = $this->name;
    }
}
$a = new Car1();
$a->name = 'new car';
$b = clone $a;
var_dump($b);

/*对象序列化，可以通过serialize方法将对象序列化为字符串，用于存储或者传递数据，然后在需要的时候通过unserialize将字符串反序列化成对象进行使用。*/
class Car2 {
    public $name = 'car';
}
$a = new Car2();
$str = serialize($a); //对象序列化成字符串
echo $str.'<br>';
$b = unserialize($str); //反序列化为对象
var_dump($b);
?>