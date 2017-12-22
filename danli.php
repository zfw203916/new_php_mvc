<?php

/**
* 单例模式
**/

class Demo{
	//1、静态私有属性，保存当前类的实例
	//http://www.php.cn/code/20782.html
	//2、构造方法私有化，禁止从外部用new来创建类实例
	
}

$str = new Demo();
$str2 = new Demo();
$str3 = $str2; //对象间的赋值是引用赋值
$str4 = clone $str2; //独立的对象。
var_dump($str, $str2, $str3, $str4);