<?php
include '../libs/db.php';
$sql="select * from fenlei where pid=2";
$fu=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
$sql="select * from categories where pid=15";
$neirong=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
include '../template/index/fuwu.html';
