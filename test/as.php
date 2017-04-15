<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "zzb";
?>
<?php
// Session需要先启动。
session_start();
//判断uname和pwd是否赋值
if(isset($_POST['uname']) && isset($_POST['pwd'])){
    $name = $_POST['uname'];
    $pwd = $_POST['pwd'];
    //连接数据库
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //验证内容是否与数据库的记录吻合。
    $sql = "SELECT * FROM zzbUser WHERE (user='$name') AND (password='$pwd')";
    //执行上面的sql语句并将结果集赋给result。
    $result = $conn->query($sql);
    //判断结果集的记录数是否大于0
    if ($result->num_rows > 0) {
        $_SESSION['user_account'] = $name;
        // 输出每行数据
        while($row = $result->fetch_assoc()) {
            echo '<p>' . $row['student_nbr'] . '<br/>' . $row['student_name'] . '(' . $row['sex'] . ')' . '<br/>' . $row['class'] . '<br/>' . $row['major'].'</p>';
            // <p><img src="student_images/CLASS/STUDENT_NBR.jpg" /></p>
            echo '<p><img src="student_images/' . $row['class'] . '/' . $row['student_nbr'] . '.jpg" /></p>';
        }
    } else {
        echo "没有您要的信息";
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录校验</title>
</head>
<body>
<p>
    <?php
    // isset(xx) 测试xx是否设置了
    if(isset($_SESSION['user_account'])){
        echo '你好，' . $_SESSION['user_account'];
    }
    else{
        echo '游客';
    }
    //$conn->close();
    ?>
</p>
<form method="POST">
    <input type="text" name="uname" placeholder="用户名" />
    <br />
    <input type="password" name="pwd" placeholder="密码" />
    <br />
    <input type="submit">
</form>
</body>
</html>
