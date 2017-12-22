<?php
/**
* 视图显示数据
**/

echo '<h2 align="center">student table';
echo '<table border="1" cellspacing="0" cellpadding="5" align="center" width="60%">';
echo '<tr align="center" bgcolor="#87ceeb"><th>id</th><th>name</th><th>mail</th><th>course</th>';

foreach($rows as $row){
	echo '<tr align="center"';
	echo '<td>'.$row['id'].'</td>'.'<td>'.$row['name'].'</td>'.'<td>'.$row['email'].'</td>'.'<td>'.$row['course'].'</td>'.'<td>'.$row['grade'].'</td>';
	echo '</tr>';
}
echo '</table>';