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

$sql = "SELECT * From student where grade > 56";
$row = $db->fetch($sql);
var_dump($row);
die;

/**
* 五、查询多条
**/
$sql = "SELECT * FROM student";
$rows = $db->fetchAll($sql);
var_dump($rows);