<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 12:09
 */
header("content-type:text/html;charset=utf8");
?>
<html>
<body>
<table width="100%" height="500px" border="1" cellspacing="0" bgcolor="#ffb6c1">
    <tr>
        <td colspan="2" height="100px" align="center"><b>后台管理系统</b></td>
    </tr>
    <tr>
        <td align="left" width="200px" height="300px" >
            <a href="../index.php?type=add">发布文章</a><br>
            <a href="../index.php">管理文章</a>
        </td>
        <td width="900px">
            <form action="../index.php?type=update" method="post" enctype="multipart/form-data">
                <table width="800px">
                    <tr>
                        <td colspan="2" align="center">发布文章</td>
                    </tr>
                    <tr>
                        <td width="100px"><label for="title">文章类型</label></td>
                        <td width="600px">
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
                            <input type="text" id="title" name="title">
                        </td>
                    </tr>
                    <tr>
                        <td width="100px"><label for="author">作者</label></td>
                        <td width="600px" >
                            <input type="text" id="author" name="author">
                        </td>
                    </tr>
                    <tr>
                        <td width="100px"><label for="content">内容</label></td>
                        <td >
                            <textarea id="content" name="content" cols="60" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td width="100px">图片</td>
                        <td width="200px">
                            <input type="file" name="userfile" onchange="preImg()" id="_file">
                        </td>
                        <td><canvas width="100px" height="100px" id="can0"></canvas></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" value="提交" name="button" id="button">
                        </td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="left">版权所有jujiao_web.cn</td></tr>
</table>
</body>
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
