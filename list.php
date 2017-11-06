<?php
include '../libs/db.php';
include 'header.php';
$fid=$_GET['fid'];
$sql="select * from fenlei where fid={$fid}";
$data=$mysql->query($sql)->fetch_assoc();
$href=$data['href'];
$cname=$data['cname'];
include "{$href}";
include 'footer.php';