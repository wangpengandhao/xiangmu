<?php
include '../libs/db.php';
include 'header.php';
$fid=$_GET['fid'];
/*select count(*) as a from fenlei where cid=1;*/
/*判断是否有页码*/
/*$page= isset($_GET['page'])?$_GET['page']:1;
$num=3;
$totle=$mysql->query("select count(*) as totle from fenlei where cid=1 ")->fetch_assoc()['totle'];
$pages=ceil($totle/$num);

$offset=($page-1)*3;*/

$sql="select * from fenlei where fid={$fid}"; /*limit $offset,3*/
$data=$mysql->query($sql)->fetch_assoc();
$href=$data['href'];
$cname=$data['cname'];
include "{$href}";
include 'footer.php';