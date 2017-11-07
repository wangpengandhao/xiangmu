<?php
include '../libs/db.php';
$sql="select * from categories where pid=3";
$tehui=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
include '../template/index/tehui.html';