<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/24
 * Time: 10:22
 */
include "connect.php";
header("content-type:text/html;charset=utf8");
date_default_timezone_set("PRC");
$title=$_POST["title"];
$name=$_POST["author"];
$content=$_POST["content"];
$date=date("Y-m-d H:i:s");
$type=$_POST["news"];
//print_r($_FILES["userfile"]);
$temp=$_FILES["userfile"]["tmp_name"];
$img="img/".time().".png";
if($_FILES["userfile"]["error"]==0){
    if(is_uploaded_file($temp)){
        if(move_uploaded_file($temp,$img)){
            //插入数据
            $sql="insert into articlesubmit(title,name,content,img,datetime,classify_id,list)VALUES (?,?,?,?,?,?,?)";
            $res=$conn ->prepare($sql);
            if($type=="综合"){
                $id=1;
            }else if($type=="娱乐"){
                $id=2;
            }else{
                $id=3;
            }
            $res ->execute([$title,$name,$content,$img,$date,$id,$type]);
            echo "<script>alert('发布成功！');history.back();</script>";
        }
    }
}


?>