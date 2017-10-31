<?php
header('Content-type:text/html;charset=utf8');
if($_SERVER['REQUEST_METHOD']=='GET'){
    //显示页面
    include '../template/admin/login.html';
}else{
    //验证
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $mysql= new mysqli('localhost','root','','baojie',3306);
    $mysql->query('set names utf8');
    if($mysql->connect_errno){
        echo '数据库链接失败，失败信息' .$mysql->connect_errno;
        exit;
    }
    $sql = "select * from admin";
    $result=$mysql->query($sql);
    $data=$result->fetch_all(MYSQLI_ASSOC);
    for ($i=0;$i<count($data);$i++){
        if ($data[$i]['uname']==$user &&$data[$i]['upass']==$pass){
            header('location:main.php');
            exit;
        }
    }
    $message='登陆失败';
    $url='login.php';
    include 'message.html';
}
?>