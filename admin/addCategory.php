<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    include '../template/admin/addCategory.html';
    include '../libs/db.php';
    include '../libs/function.php';
    $cate=new unit();
    $option=$cate->cateTree(0,$mysql,'fenlei',0);
}else{
    include '../libs/db.php';

    $pid=$_POST['pid'];
    $cname=$_POST['cname'];

    $sql="insert into fenlei(pid,cname) values('{$pid}','{$cname}')";
    $mysql->query($sql);
    if($mysql->affected_rows){
        $message='栏目插入成功';
        $url='addCategory.php';
    }else{
        $message='栏目插入失败';
        $url='addCategory.php';
    }
    include 'message.html';
}