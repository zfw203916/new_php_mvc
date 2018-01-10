<?php

require 'model/Db.php';
$db = Db::getInstance();
//phpInfo();die;


/**
* 一、update更新操作
**/
/*
$sql = "update student set grade = 0 where id = 3";
$db->exec($sql);
echo '更新了：'.$db->num.' 条记录';
*/


/**
* 二、新增操作
**/
/*
$create_time = time();
$update_time = time();

$sql = "INSERT  student SET name = '朱老师', email='test@qq.com', course ='js', grade = 100, create_time = {$create_time}, update_time = {$update_time} ";

$db->exec($sql);
echo '成功新增了：'.$db->num.' 条记录, 新增主键id是' . $db->insertId;
*/


/**
* 三、删除操作
**/
/*
$sql = "DELETE FROM student where id = 6";

$db->exec($sql);
echo '成功删除了：'.$db->num.' 条记录, 删除的主键id是' . $db->insertId;
*/



/**
* 四、查询单条
**/

    echo '<table border="1" align="center" width=90%>';
    echo '<caption><h1>联系人信息表</h1></caption>';
    echo '<tr bgcolor="#cccccc">';
    echo '<th>UID</th><th>姓名</th><th>联系地址</th><th>联系电话</th><th>电子邮件</th></tr>';
 
    //使用query方式执行SELECT语句，建议使用prepare()和execute()形式执行语句
    $stmt = $db->query("select * FROM student");
	var_dump($stmt);die;
    //以PDO::FETCH_NUM形式获取索引并遍历
    while (list($id,$name,$email,$course,$grade)=$stmt->fetch(PDO::FETCH_NUM)){
        echo '<tr>';
        echo '<td>'.$id.'</td>';
        echo '<td>'.$name.'</td>';
        echo '<td>'.$email.'</td>';
        echo '<td>'.$course.'</td>';
        echo '<td>'.$grade.'</td>';
        echo '</tr>';
    }
 
    echo '</table>';


die;

$sql = "SELECT * FROM student WHERE grade > 0";
$row = $db->fetch($sql);
var_dump($row);
die;

/**
* 五、查询多条
**/
$sql = "SELECT * FROM student";
$rows = $db->fetchAll($sql);
echo '<pre>';
var_dump($rows);