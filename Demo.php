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
$create_time = time();
$update_time = time();

$sql = "INSERT  student SET name = '朱老师', email='test@qq.com', course ='js', grade = 100, create_time = {$create_time}, update_time = {$update_time} ";

$db->exec($sql);
echo '成功新增了：'.$db->num.' 条记录, 新增主键id是' . $db->insertId;

//查询
