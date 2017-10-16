<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2017/09/20
 * Time: 09:37
 */
session_start();
session_destroy();
echo "已经退出登录，<a href='login.php'>点击返回登录页面</a>";