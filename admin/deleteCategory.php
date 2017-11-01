<?php
include '../libs/db.php';
$fid=$_GET['fid'];
$sql="select * from fenlei where pid=${fid}";
if($mysql->query($sql)->fetch_assoc()){
    $message='存在子栏目，不能删除';
    $url='showCategory.php';
    include 'message.html';
    exit;
};
$sql="delete from fenlei where fid=${fid}";
$mysql->query($sql);
if ($mysql->affected_rows){
    $message='删除成功';
    $url='showCategory.php';
    include 'message.html';
}else{
    $message='删除失败';
    $url='showCategory.php';
    include 'message.html';
}
