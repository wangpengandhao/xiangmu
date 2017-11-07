<?php
include '../libs/db.php';
$sql="select * from fenlei where pid=0";
$nav=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
include '../template/index/header.html';