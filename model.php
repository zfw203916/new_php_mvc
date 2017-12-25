<?php
/**
* 模型
* 获取数据 
**/

$conn = new mysqli('localhost', 'root', 'root', 'edu');

/**
*  check connection
**/
if($conn->connect_error){
	printf("error: %s\n", $mysql->connect_error);
}

/**
* select queries return a resultset
**/
$result = "SELECT * FROM student";

/*
if($result && mysqli_fetch_all($result) > 0){
	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
}else{
	echo '<h2>没有数据返回</h2>';
}
var_dump($result);die;
*/