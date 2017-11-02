<?php
header('Content-type:text/html;charset=utf8');
include '../libs/db.php';
if ($_SERVER['REQUEST_METHOD']=='GET'){
    include '../libs/function.php';
    $cate=new unit();
    $option=$cate->cateTree(0,$mysql,'fenlei',0);
    include '../template/admin/addArticle.html';
}else{
    $pid=$_POST['pid'];
    $title=$_POST['title'];
    $file=$_FILES['img'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $text=$_POST['text'];
    if (is_uploaded_file($file['tmp_name'])){
        if(!file_exists('../static/upload')){
            mkdir('../static/upload');
        }
    }
    $path='../static/upload/' .date('y-m-d');

    if (!file_exists($path)){
        mkdir($path,0,true);
    }
    $imgPath=$path .'/' .$file['name'];
    move_uploaded_file($file['tmp_name'],$imgPath);
    $src='/wuif1707/10.31/' .substr($imgPath,3);

    $sql="insert into categories (pid,title,file,description,price,text) VALUES ($pid,'{$title}','{$src}','{$description}','{$price}','{$text}')";
    $mysql->query($sql);
    if ($mysql->affected_rows){
        $message='内容插入成功';
        $url='showArticle.php';
    }else{
        $message='内容插入成功';
        $url='showArticle.php';
    }
    include 'message.html';
}