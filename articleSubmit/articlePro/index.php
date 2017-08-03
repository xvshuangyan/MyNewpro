<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 12:07
 */
include "model/connect.php";
//include "view/articleList.inc.php";
//include "view/handleArticle.inc.php";
include "controler/manage.class.php";
include "common/tool.class.php";
$manage=new Manage();
if($_POST || $_GET){
    if($_POST["type"]){
        if($_POST["type"]=='add'){
            $manage->add();
        }
    }
}else{
    //如果没有get或者post传输，就进入列表页面
    $manage->select();
}