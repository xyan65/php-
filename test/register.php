<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script language="JavaScript">


        function judge() {
            var password = document.getElementById("password").value;
            var confirm = document.getElementById("confirm").value;
            var user = document.getElementById("user").value;
            var sex = document.getElementById("sex").value;
            if (password==confirm&&password.length>0&&user.length>0&&sex.length>0){

                alert("密码一致");

                return true;
            }else {
                document.getElementById("span").style.visibility = "visible";
                return false;
            }
        }


    </script>
    <title>注册</title>
</head>
<body>
<?php
session_start();
session_unset();
session_destroy();
?>
<form  method="post" action="regwin.php" onsubmit=" return judge()">

    <p>用户注册</p>
    <p>输入用户名:<input type="text" name="user" id="user"></p>
    <p>输入密码:<input type="password" name="password" id="password"> </p>
    <p>确认密码:<input type="password" name="confirm" id="confirm">
    <span style="color: red;visibility: hidden" id="span">两次密码不一致</span>
    </p>
    <p><input type="radio" name="sex" value="男" id="sex">男<input id="sex" type="radio" name="sex" value="女">女</p>
    <p><button type="submit">注册</button>
    <a href="login.php"><button type="button">登录</button></a>
    </p>


</form>

</body>
</html>