<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/9
 * Time: 14:52
 */
header("content-type:text/html;charset=utf8");
?>
<html>
<form method="post" action="regist1.php">
    用户名：<input type="text" name="user"><br>
    密码：<input type="password" name="pwd"><br>
    验证码：<input type="text" name="num">
    <img src="number.php"><br>
    <input type="submit" value="注册">
</form>
</html>
