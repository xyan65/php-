<?php
header("content-type:text/html;charset=UTF-8");

/**
 * Created by PhpStorm.
 * User: naguannide
 * Date: 2017/4/15
 * Time: 4:44
 */

include_once "mysqlUser.php";
$link = mysqli_connect($db_url,$db_user,$db_password,'zzb');
mysqli_set_charset($link,$db_charset);

$user = $_POST['user'];
$password = $_POST['password'];
$SQLselect = "select * from zzbUser where user='$user' and password='$password'";

$result = mysqli_query($link,$SQLselect);

$arr = mysqli_fetch_assoc($result);

if ($arr){
    session_start();
    $_SESSION['user']=$arr['user'];
    echo '登录成功,你好'.$arr['user'];
}else{
    echo '登录失败';
}

echo '<a href="home.php">首页</a>';
