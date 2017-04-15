<?php
header("content-type:text/html;charset=UTF-8");
/**
 * Created by PhpStorm.
 * User: naguannide
 * Date: 2017/4/14
 * Time: 13:31
 */

include_once "mysqlUser.php";
//连接数据库
$link = mysqli_connect($db_url,$db_user,$db_password,"zzb");

//设置结果集
mysqli_set_charset($link,$db_charset);
if ($link){
    echo '数据库连接成功</br>';
}

//设置mysql插入语句
$sqlInsert = 'insert into zzbUser values("'.$_POST['user'].'","'.$_POST['password'].'","'.$_POST['sex'].'")';

//执行mysql语句
$result = mysqli_query($link,$sqlInsert);

if ($result){
    echo '注册成功';
}else{
    echo '注册失败'.mysqli_error($link).mysqli_errno($link);
}

//关闭数据库
mysqli_close($link);
echo '</br><a href="login.php">登录</a>';
?>

