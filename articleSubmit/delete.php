<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/24
 * Time: 11:54
 */
header("content-type:text/html;charset=utf8");
$update=$_GET["id"];
include "connect.php";
    //从数据库找到这条字段
    $sql="delete from articlesubmit WHERE id=$update";
    $res=$conn ->prepare($sql);
    $res ->execute();
    echo "<script>alert('删除成功！');location.href='manageArticle.php';</script>";
?>