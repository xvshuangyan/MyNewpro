<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/24
 * Time: 11:26
 */
//连接数据库
$servername='localhost';
$username='root';
$password='root';
$params=array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES\'UTF8\'',
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
);
try {
    $conn = new PDO("mysql:host =$servername;dbname=article", $username, $password, $params);
}catch (PDOException $e){
    echo $e ->getMessage();
}

