<?php
include '../libs/db.php';
$sql="select * from categories where pid=1";
$baojie=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
include '../template/index/baojie.html';