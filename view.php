<?php
/**
* 视图显示数据
**/

echo '<h2 align="center">student table';
echo '<table border="1" cellspacing="0" cellpadding="5" align="center" width="60%">';
echo '<tr align="center" bgcolor="#87ceeb"><th>id</th><th>name</th><th>mail</th><th>course</th>';

if($result = $conn->query($result)){
	foreach($result as $results){
		echo '<tr align="center"';
		echo '<td>'.$results['id'].'</td>'.'<td>'.$results['name'].'</td>'.'<td>'.$results['email'].'</td>'.'<td>'.$results['course'].'</td>'.'<td>'.$results['grade'].'</td>';
		echo '</tr>';
		//var_dump($results['id'],$results['name']);
	}
	//printf($result->num_resultss);
	$result->close();
}
echo '</table>';
