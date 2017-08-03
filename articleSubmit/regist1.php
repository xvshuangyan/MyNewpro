<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/9
 * Time: 16:00
 */
header("content-type:text/html;charset=utf8");
$user=$_POST["user"];
$pwd=$_POST["pwd"];
//读取缓存中的数据
$str=$_COOKIE["userlist"];
//反序列化
$getArr=unserialize($str);
print_r($getArr);
//查找当前用户名在数据库中是否存在
foreach($getArr as $item){
    if(in_array($user,$getArr)){
        //如果存在不写入缓存，然后跳回注册页面
//        echo "<script>alert('用户名存在');</script>";
        exit;
    }

}
//如果不存在就存在缓存中
if($_COOKIE["userlist"]){
    $allArr=$getArr;
}else{
    $allArr=array();
}
$currentArr=array($user);
array_push($allArr,$currentArr);
$str=serialize($allArr);
setcookie("userlist",$str);


