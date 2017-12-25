<?php

require 'model/Db.php';

$db = Db::getInstance();

//update
$sql = "update student set grade = 0 where id = 3";
$db->exec($sql);
echo 'update：'.$db->num.'：条记录';
