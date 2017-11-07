<?php
include 'header.php';
$sql="select * from picture where pid=0";
$picture=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
$sql="select * from picture where pid=1";
$texts=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

$sql="select * from categories where pid=2";
$nav=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
include '../template/index/index.html';
include 'footer.php';