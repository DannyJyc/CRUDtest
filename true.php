<?php

/**
 * @Author: Jason
 * @Date:   2017-09-20 08:07:46
 * @Last Modified by:   Jason
 * @Last Modified time: 2017-09-20 08:10:02
 */
session_start();
echo $_SESSION['username'];
echo "<br><a href='logout.php' >来啊来啦，干掉你自己吧</a>";