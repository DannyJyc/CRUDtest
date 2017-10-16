<?php
/**
 * Created by PhpStorm.
 * User: JaaonZhuang
 * Date: 2017/10/16
 * Time: 22:18
 */
function alert($title)
{
    echo "<script type='text/javascript'>alert('$title');</script>";
}

function href($url)
{
    echo "<script type='text/javascript'>window.location.href='$url'</script>";
}

function delete($classname, $id, $conn)
{
    $sql = "delete from '$classname' where id='$id'";
    mysqli_query($conn, $sql);
    $rows = mysqli_affected_rows($conn);
    return $rows;
}

function judgeDelete($classname, $id)
{
    if (judgeType($classname) && judgeID($id)) {
        echo "good! the TYPE is <span style='color:red;'>" . $classname . "</span> and the ID is <span style='color:red;'>" . $id . "</span>";
    }

}

function judgeType($classname)
{
    if ($classname == "users" || $classname == "students" || $classname == "teachers" || $classname == "classes" || $classname == "courses" || $classname == "exams") {
        return true;
    } else {
        return false;
    }
}

function judgeID($idvalue)
{
    if (is_integer($idvalue) && $idvalue > 0) {
        return true;
    } else {
        return false;
    }
}
