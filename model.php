<?php
/**
* 模型
* 获取数据 
**/

$conn = mysqli_connect('localhost', 'root', 'root', 'edu');
$result = mysqli_query($conn, "SELECT * FROM student");
if($result && mysqli_fetch_all($result) > 0){
	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
}else{
	echo '<h2>没有数据返回</h2>';
}
