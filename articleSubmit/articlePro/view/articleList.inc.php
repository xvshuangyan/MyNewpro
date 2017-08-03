<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 12:13
 */
?>
<html>
<style>
    img{
        height: 50px;
        width:100%;
    }
    table{
        text-align: center;
    }
</style>
<table width="100%" height="500px" border="1" cellspacing="0" bgcolor="#add8e6">
    <tr>
        <td colspan="2" height="100px" align="center"><b>后台管理系统</b></td>
    </tr>
    <tr>
        <td align="left" width="200px" height="300px" >
            <a href="../index.php?type=add">发布文章</a><br>
            <a href="manageArticle.php">管理文章</a><br>
            <a href="colligation.php">综合</a><br>
            <a href="entertainment.php">娱乐</a><br>
            <a href="P.E..php">体育</a>
        </td>
        <td width="900px">
            <table border="1" cellspacing="0" bgcolor="#fafad2" width="100%">
                <tr>
                    <th>编号</th>
                    <th>标题</th>
                    <th>作者</th>
                    <th>图片</th>
                    <th>时间</th>
                    <th>操作</th>
                    <th>种类</th>
                </tr>
                <?php foreach($arr1 as $item){?>
                    <tr>
                        <td><?php echo $item["id"];?></td>
                        <td><?php echo $item["title"];?></td>
                        <td><?php echo $item["name"];?></td>
                        <td style="width:100px;"><img src="<?php echo $item["img"];?>"/></td>
                        <td><?php echo $item["dateTime"]?></td>
                        <td><a href="update.php?id=<?php echo $item["id"];?>">修改</a><a href="delete.php?id=<?php echo $item["id"];?>">删除</a></td>
                        <td><?php echo $item["list"];?></td>
                    </tr>
                <?php }?>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="left">版权所有jujiao_web.cn</td></tr>
</table>
</html>
