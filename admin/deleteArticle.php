<?php
include '../libs/db.php';
$cid=$_GET['cid'];
$sql="select * from categories where pid={$cid}";
if ($mysql->query($sql)->fetch_assoc()){
    $message='存在子栏目，不能删除';
    $url='showArticle.php';
    include 'message.html';
    exit;
}
$sql="delete from categories where cid={$cid}";
$mysql->query($sql);
if($mysql->affected_rows){
    $message='删除成功';
    $url='showArticle.php';
    include 'message.html';
}else{
    $message='删除失败';
    $url='showArticle.php';
    include 'message.html';
}