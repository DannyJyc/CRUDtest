<?php
// 包含数据库文件
require_once 'inc/dbConn.php';
// 获取删除的id
$id = $_GET['id'];
$classname = $_GET['classname'];
$row = delete($classname, $id, $conn);
if ($row >= 1) {
    alert("删除成功");
} else {
    alert("删除失败");
}
// 跳转到用户列表页面
href("userListt.php");
?>