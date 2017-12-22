<?php

//获取数据
$conn = mysqli_connect('localhost', 'root', 'root', 'edu');

$result = mysqli_query($conn, "SELECT * FROM student");
if($result && mysqli_fetch_all($result) > 0){
	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
}else{
	echo '<h2>没有数据返回</h2>';
}
var_dump($rows);die;
//显示数据
echo '<h2 align="center">student table';
echo '<table border="1" cellspacing="0" cellpadding="5" align="center" width="60%">';
echo '<tr align="center" bgcolor="#87ceeb"><th>id</th><th>name</th><th>mail</th><th>course</th>';

foreach($rows as $row){
	echo '<tr align="center"';
	echo '<td>'.$row['id'].'</td>'.'<td>'.$row['name'].'</td>'.'<td>'.$row['email'].'</td>'.'<td>'.$row['course'].'</td>'.'<td>'.$row['grade'].'</td>';
	echo '</tr>';
}
echo '</table>';