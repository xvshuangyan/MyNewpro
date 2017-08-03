<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/24
 * Time: 12:23
 */
//echo "success";
include "connect.php";
header("content-type:text/html;charset=utf8");
//print_r($_GET);
$update=$_POST["id"];
$title=$_POST["title"];
$name=$_POST["author"];
$content=$_POST["content"];
$kind=$_POST["news"];
$img1="img/".time().".png";
$temp=$_FILES["file1"]["tmp_name"];
if($_FILES["file1"]["error"]==0){
    if(is_uploaded_file($temp)){
        if(move_uploaded_file($temp,$img1)){
            $sql="update articlesubmit set title='$title',name='$name',img=$img1,content='$content',list='$kind' WHERE id=$update";
            $res=$conn ->prepare($sql);
            $res ->execute();
            echo "<script>alert('修改成功！');location.href='manageArticle.php';</script>";
        }
    }
}


?>