<?php
require_once "inc/dbconn.php";

// if ($_session['username']!="") {
// 	$_session['username']=$username;
// 	echo $_session['username'];
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<a href="userListt.php">学生列表</a>
<p>
    <?php
    judgeLogin()
    ?>
</p>
</body>
</html>
