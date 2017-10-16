<?php
require_once 'inc/dbConn.php';
session_start();

$username = $_POST['username'];
echo $username;
$password = $_POST['password'];
echo $password;


if (!$conn) {

    echo "<script>alert('数据库连接失败！')</script>";
} else {

    if (isset($_POST['submit'])) {
        $query = "select * from users where username = '{$_POST['username']}' and password = '{$_POST['password']}'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            header("Location:true.php");
        } else {
            header("Location:false.php");
        }
    }
}
