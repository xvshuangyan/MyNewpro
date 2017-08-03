<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 17:28
 */
class Tool{
    public static function alert($message,$url){
        echo "<script>alert('".$message."');location.href='".$url."';</script>";
    }
}