<?php

/**
* 单例模式
**/

/**
 一、单例模式 
 所有对于配置文件的改变都是基于这个类的实例进行修改的。而不会出现因为多个类的实例化.
class Demo{
	//1、静态私有属性，保存当前类的实例
	//http://www.php.cn/code/20782.html
	//2、构造方法私有化，禁止从外部用new来创建类实例
	
	protected function __construct(){}
	
	public static function getInstance(){
		static $_test;
		if(empty($_test)){
			$_test = new Demo();
		}
		
		return $_test; // or return new self();
	}
	
}

$test1 = Demo::getInstance();
$test2 = Demo::getInstance();
$test3 = Demo::getInstance();
var_dump($test1, $test2, $test3);
echo '<br/>',$test1 == $test2 ? 'true' : 'false';
**/

class Demo{
	//1、静态私有属性，保存当前类的实例
	//http://www.php.cn/code/20782.html
	private static $instance = null;
	
	//2、构造方法私有化，禁止从外部用new来创建类实例
	protected function __construct(){}
	
	//3、克隆的魔术方法私有化，禁止从外部克隆来生成本类的实例
	private function __clone(){}
	
	//4、生成当前类的唯一实例
	public static function getInstance(){

		if(!self::$instance instanceof self){
			self::$instance = new self();
		}
		
		return self::$instance; // or return new self();
	}
	
}

$obj1 = Demo::getInstance();
$obj2 = Demo::getInstance();
$obj3 = Demo::getInstance();
var_dump($obj1, $obj2, $obj3);