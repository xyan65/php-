<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <script language="JavaScript">
        function judge(){
            var user = document.getElementById("user").value;
            var password = document.getElementById("password").value;
            if (user.length>0&&password.length>0){
                return true;
            }else{
                return false;
            }
        }
    </script>
</head>
<body>

<form action="logwin.php" onsubmit="return judge()" method="post">
    <p>登录</p>
    <p>用户名:<input type="text" name="user" id="user"></p>
    <p>密码:<input type="password" name="password" id="password"></p>
    <p><button type="submit">登录</button>
        <a href="register.php"><button type="button">注册</button></a>
        <a href="home.php"><button type="button">首页</button></a></p>
</form>
</body>
</html>