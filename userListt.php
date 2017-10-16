<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>会员信息列表</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0" id="userList" align="center">
    <tr align="center">
        <th>id</th>
        <th>用户名</th>
        <th>密码</th>
        <th>性别</th>
        <th>年龄</th>
        <th>出生年月</th>
        <th>爱好</th>
        <th>注册时间</th>
        <th>最后登录时间</th>
        <th>操作</th>
    </tr>
    <?php
    require_once 'inc/dbConn.php';
    //这是啥东东。。
    //date_default_timezone_set("PRC");
    //读数据。。。
    $sql = "SELECT * FROM users ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $userList = array();
    while ($rs = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $userList[] = $rs;
    }
    // 循环用户列表
    foreach ($userList as $user) {
        echo "
             <tr>
              <td> " . $user['id'] . "</td>
              <td> " . $user['username'] . "</td>
              <td> " . $user['password'] . "</td>
              <td> " . $user['sex'] . "</td>
              <td> " . $user['age'] . "</td>
              <td> " . $user['birthday'] . "</td>
              <td> " . $user['hobby'] . "</td>
              <td> " . $user['add_time'] . "</td>
              <td> " . $user['last_login'] . "</td>
              <td> <a href='addUser.php'>增</a> 
              <a href='deleteUser.php?classname=users&id=" . $user['id'] . "'>删</a>
              <a href='editUser.php?classname=users&id=" . $user['id'] . "'>改</a>
              <a href='detailUser.php?classname=users&id=" . $user['id'] . "'>查</a>                    
              </td>
             </tr>
          ";
    }

    ?>
</table>
</body>
</html>
<?php
//mysqli_free_result($result);
//
//mysqli_close($con);
?>