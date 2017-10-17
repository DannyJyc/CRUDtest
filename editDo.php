<?php
require_once 'inc/dbConn.php';
////////////////////
///获取用户信息
////////////////////
$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
if ($_POST['sex'] == '男') {
    $sex = 1;
} else if ($_POST['sex'] == '女') {
    $sex = 2;
} else $sex = 3;;
$age = $_POST['age'];
$birthday_y = $_POST['birthday_y'];
$birthday_m = $_POST['birthday_m'];
$birthday_d = $_POST['birthday_d'];
$birthday = $birthday_y . "-" . $birthday_m . "-" . $birthday_d;
$hobby = $_POST['hobby'];
$profile = $_POST['profile'];
$addTime = mktime(date("h"), date("m"), date("s"), date("m"), date("d"), date("Y"));
$lastLoginTime = $addTime;
$sql = "update users set username='$user_name',password='$password',sex='$sex',age='$age',birthday='$birthday',hobby='$hobby',profile='$profile' where id=$user_id";
echo $sql;

// 执行sql语句
mysqli_query($conn, $sql);
// 获取影响的行数
$rows = mysqli_affected_rows($conn);
// 返回影响行数
// 如果影响行数>=1,则判断添加成功,否则失败
if ($rows >= 1) {
    alert("编辑成功");
    href("userListt.php");
} else {
    alert("您并未作出改动或编辑失败");
//   href("addUser.php");
}

?>