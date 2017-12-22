<?php

/**
* 单例模式
**/

class Demo{
	
}

$str = new Demo();
$str2 = new Demo();
$str3 = $str2; //对象间的赋值是引用赋值
$str4 = clone $str2; //独立的对象。
var_dump($str, $str2, $str3, $str4);