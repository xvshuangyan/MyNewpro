<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 12:14
 */
//用来连接数据层和显示层的！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！
class Manage{
    public function add(){
    //显示添加的页面，不需要读取数据
        if($_POST){
            //有数据传输就加入到数据库中
            $sql="insert into articlesubmit(title,name,content,img,datetime,classify_id,list)VALUES (?,?,?,?,?,?,?)";
            $arr=[$_POST["title"],$_POST["name"],$_POST["content"],$_POST["img"],$_POST["datetime"],$_POST["classify_id"],$_POST["list"]];
            $arr1=Db::getInstance()->add($sql,$arr);
            $this->select();
        }else{
            //先获取下拉菜单的选项，也就是读取classify的表
            $sql="select * from classify";
            $arr1=Db::getInstance()->select($sql);
            //如果没有数据就直接显示增加的页面
            include "../view/handleArticle.inc.php";
        }

    }
    public function update(){

    }
    public function del(){

    }
    public function select(){
        $sql="select * from articlesubmit";
        $arr1=Db::getInstance()->select($sql);

        $arr2=[];
        foreach($arr1 as $item){
            $name=$this->getClassify_name($item["list"]);
            $item["list"]=$name;
            array_push($arr2,$item);
        }
        include "view/articleList.inc.php";//相对于index.php而言
    }
    private function getClassify_name($classify_id){
        $sql="select name from classify WHERE id=$classify_id";
        $arr1=Db::getInstance()->select($sql);
        return $arr1[0]["name"];
    }
}