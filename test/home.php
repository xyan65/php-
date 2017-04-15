<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
</head>

<script language="JavaScript">


</script>

<body>
<?php
header("content-type:text/html;charset=UTF-8");
/**
 * Created by PhpStorm.
 * User: naguannide
 * Date: 2017/4/15
 * Time: 7:11
 */
session_start();
if (@$_SESSION['user']){
echo 'hello:'.$_SESSION['user'];
echo '<a href="register.php"><button type="button" onclick="exit()">退出</button></a>';
}else{
    echo '<a href="login.php"><button type="button" onclick="exit()">登录</button></a>';
}
?>
</body>
</html>


