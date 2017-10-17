<?php
require_once 'inc/dbConn.php';

$username = $_POST['username'];
// echo $username."--->username<br>";
$password = $_POST['password'];
// echo $password."--->password<br>";


if (!$conn) {

    echo "<script>alert('数据库连接失败！')</script>";
} else {

    if (isset($_POST['submit'])) {
        $query = "select * from users where username = '{$_POST['username']}' and password = '{$_POST['password']}'";
        // echo $query."--->query<br>";
        $result = mysqli_query($conn, $query);
        // echo mysqli_num_rows($result)."--->mysqli_num_rows<br>";
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $user = mysqli_fetch_array($result);
            // echo $user['admin']."--->admin<br>";
            $_SESSION['admin'] = $user['admin'];
            if ($user['admin'] >= 9) {
                header("Location:admin.php");
            } else {
                header("Location:userListt.php");
            }            
        } else {
            header("Location:false.php");
        }
    }
}
