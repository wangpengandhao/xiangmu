<?php
$mysql= new mysqli('localhost','root','','baojie',3306);
$mysql->query('set names utf8');
if($mysql->connect_errno){
    echo '数据库链接失败，失败信息' .$mysql->connect_errno;
    exit;
}