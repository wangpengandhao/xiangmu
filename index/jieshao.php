<?php
include 'header.php';
include '../libs/db.php';
$cid=$_GET['cid'];
$sql="select * from categories where cid=$cid";
$nav=$mysql->query($sql)->fetch_assoc();
$navs=substr($nav['title'],0,9);
$sql="select * from jieshao where cid=$cid";
$bao=$mysql->query($sql)->fetch_assoc();
include '../template/index/jieshao.html';
include 'footer.php';