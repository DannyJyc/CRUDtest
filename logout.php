<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2017/09/20
 * Time: 09:37
 */
session_start();
session_unset();
session_destroy();
echo "已经退出登录，<a href='index.php'>点击返回主页。</a>";