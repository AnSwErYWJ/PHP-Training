<?php
/*PHP有两种数组：索引数组、关联数组。
索引和关联两个词都是针对数组的键而言的。*/

//索引数组,索引数组是指数组的键是整数的数组，并且键的整数顺序是从0开始，依次类推。
$fruit = array("苹果");
print_r($fruit);//输出数组键及对应的值。

//赋值
$arr[0]="苹果";
$arr = array('0'=>'苹果');
$arr = array("苹果");

//访问
$arr = array('苹果','香蕉');
$arr0 = $arr[0];
if( isset($arr0) ) {print_r($arr0);}

$fruit=array('苹果','香蕉','菠萝');
for($index=0; $index<3; $index++){
    echo '<br>数组第'.$index.'值是：'.$fruit[$index];
}

$fruit=array('苹果','香蕉','菠萝');
foreach($fruit as $key=>$value){
    echo '<br>第'.$key.'值是：'.$value;
}

//关联数组,关联数组是指数组的键是字符串的数组。
$arr = array("orange"=>"橘子");

$arr = array("orange"=>"橘子");
$arr["orange"] = "苹果";
if( isset($arr) ) {print_r($arr);}

$arr = array('apple'=>"苹果",'banana'=>"香蕉",'pineapple'=>"菠萝");
$arr0 = $arr["apple"];
if( isset($arr0) ) {print_r($arr0);}

$fruit=array('apple'=>"苹果",'banana'=>"香蕉",'pineapple'=>"菠萝");
foreach($fruit as $key=>$value){
    echo '<br>键是：'.$key.'，对应的值是：'.$value;
}
?>