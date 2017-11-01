<?php
header('Content-type:text/html;charset=utf8');
if ($_SERVER['REQUEST_METHOD']=='GET'){
    include '../libs/db.php';
    include '../libs/function.php';

    $obj=new unit();
    $fid=$_GET['fid'];
    var_dump($_GET['fid']);
    $str=$obj->cateTree(0,$mysql,'fenlei',0,$_GET['fid']);

    $cname=$obj->selectOne($mysql,'fenlei',$_GET['fid'],'cname');

    include '../template/admin/updateCategory.html';
}else{
    include "../libs/db.php";
    $pid=$_POST['pid'];
    $cname=$_POST['cname'];
    $fid=$_POST['fid'];
    $sql="update fenlei set cname='{$cname}',pid='{$pid}' where fid={$fid}";
    $mysql->query($sql);
    if($mysql->affected_rows){
        $message='修改成功';
        $url='showCategory.php';
        include 'message.html';
    }else{
        $message='修改成功';
        $url='showCategory.php';
        include 'message.html';
    }
}
?>