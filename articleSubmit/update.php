<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/24
 * Time: 11:54
 */
header("content-type:text/html;charset=utf8");
$update=$_GET["id"];
include "connect.php";
    //从数据库找到这条字段
    $sql="select * from articlesubmit WHERE id=$update";
    $res=$conn ->prepare($sql);
    $res ->execute();
    $arr1=$res ->fetch(PDO::FETCH_ASSOC);//查找这条数据
?>
<html>
    <style>
        img{
            width:20%;
            height: 50px;
        }
    </style>
    <table width="100%" height="500px" border="1" cellspacing="0" bgcolor="#ffb6c1">
        <tr>
            <td colspan="2" height="100px" align="center"><b>后台管理系统</b></td>
        </tr>
        <tr>
            <td align="left" width="200px" height="300px" >
                <a href="article_add_Content.php">发布文章</a><br>
                <a href="manageArticle.php">管理文章</a>
            </td>
            <td width="900px">
                <form action="updateArticleMagage.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $arr1['id'] ?>">
                    <table width="800px">
                        <tr>
                            <td colspan="2" align="center">发布文章</td>
                        </tr>
                        <tr>
                            <td width="100px"><label for="title">文章类型</label></td>
                            <td width="600px" >
                                <select name="news">
                                    <option></option>
                                    <option id=1>综合</option>
                                    <option id=2>娱乐</option>
                                    <option id=3>体育</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="100px"><label for="title">标题</label></td>
                            <td width="600px" >
                                <input type="text" id="title" name="title" value="<?php echo $arr1['title'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td width="100px"><label for="author">作者</label></td>
                            <td width="600px" >
                                <input type="text" id="author" name="author" value="<?php echo $arr1['name'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td width="100px"><label for="content">内容</label></td>
                            <td >
                                <textarea id="content" name="content" cols="60" rows="10"><?php echo $arr1['content'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td width="100px"><label for="content">图片</label></td>
                            <td >
                               <img src="<?php echo $arr1['img'] ?>"/>
                                <input type="file" name="file1" id="_file" onchange="preImg()">
                            <td><canvas width="100px" height="100px" id="can0"></canvas></td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <input type="submit" value="修改" name="button" id="button">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="left">版权所有jujiao_web.cn</td></tr>
    </table>
    <script>
        //画布上显示选择的图片
        var canvas0=document.getElementById("can0");
        var context0=canvas0.getContext("2d");
        function preImg(){  //选择上传的图片
            var url = window.URL.createObjectURL(document.getElementById("_file").files.item(0));
//            var imgPre=document.getElementById("_file").value;
//            imgPre.src=url;
            var image=new Image();  //通过代码创建一个image的标签
            image.src=url; //指定
            image.onload=function(){
                context0.drawImage(image,0,0,100,100);
            }
        }
    </script>
</html>
