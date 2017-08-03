<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/7../index.php
 * Time: 9:27
 */
class Db{
    private $host='localhost';
    private $serverName='root';
    private $serverPwd='root';
    private $dbName='article';
    private static $self;
    private static $conn;
    public static function getInstance(){
        if(!self::$self){
            self::$self=new Db();
        }
        return self::$self;
    }
    public function connect(){
        if(!self::$conn){
            $params=array(
                PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES \'UTF8\'',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            );
            try{
                self::$conn=new PDO("mysql:host=$this->host;dbname=$this->dbName",$this->serverName,$this->serverPwd,$params);
                echo "success";
            }catch (PDOException $e){
                echo $e->getMessage();
            }
        }
    }
    //查询
    public function select($sql){
        $this->connect();
        $stmt=self::$conn->prepare($sql);
        $stmt->execute();
        $arr=$stmt->fetchAll();
        return $arr;
    }
    //增加
    public function add($sql,$arr){
        $this->connect();
        $stmt=self::$conn->prepare($sql);
        $stmt->excute($arr["title"],$arr["name"],$arr["content"],$arr["img"],$arr["datetime"],$arr["classify_id"],$arr["list"]);
//        include "view/handleArticle.inc.php";
    }
    //更改

    //删除
}
