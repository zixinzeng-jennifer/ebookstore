<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>specific_book</title>
<style>


.row{
	display:flex;
	flex-wrap:wrap;
	border: 1px solid #e7e7e7;
	}

.navitem{
	flex:70%;
	text-decoration:none;
	text-align:center;
	padding-top:5px;
	padding-bottom:5px;
	padding-right:3px;
	font-size:90%;
	font-weight:bold;
	}
.navitem a:hover:not(.active) {
    background-color: #ddd;
}
.navitem a{
  	display: block;
  	color: #666;
  	text-decoration: none;
	padding-top:3px;
	padding-bottom:3px;
	padding-right:3px;
	}
.navitem a.active {
    color: white;
    background-color: #4CAF50;
}

.row{
	display:flex;
	flex-wrap:wrap;
	border: 1px solid #e7e7e7;
	background-position:-9% 5%;
	background-repeat:repeat;
	}




</style>
</head>
<body background="bg.jpg">
	<!导航栏>
<div class="row" >
	 <div class="navitem" style="flex:5%;background-color: #FEFDED">
	<a href="homepage.php" >返回首页</a></div>

	<div class="navitem" style="flex:50%;background-color: #FEFDED"></div>
	
	<div class="navitem" style="flex:5%;background-color: #FEFDED">
	<a href="manager.php" >返回店长入口</a></div>
</div>


    <h3 align="center">修改店员信息</h3>
	<table style=" background-color: #FEFDED" width="80%" border="1" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td width="16%" align="center" >店员号</td>
        <td width="16%"align="center">姓名</td>
        <td width="16%"align="center">分店号</td>
        <td width="16%"align="center">性别</td>
        <td width="16%"align="center">联系电话</td>
        <td width="16%"align="center">登录密码</td>
        <td width="16%"align="center">操作</td>
    </tr>
	
		

	
<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="book";


	$conn=mysqli_connect("localhost","root","","book");
	$conn->query('set names utf8') or die ('query字符集错误');
		
	if(!$conn){
	die("数据库连接失败".mysqli_connect_error());
	}


$sql = "select * from employee where shopno='".$_COOKIE['shopno']."'";
$result = mysqli_query($conn,$sql);
$attr = mysqli_fetch_all($result);

foreach($attr as $v)
{
    echo"<tr>";
    foreach($v as $v1)
    {
        echo "<td style='text-align: center'>{$v1}</td>";

    }

    echo "<td><a   href='employee_delete.php?c={$v[0]}'  onclick=\"return confirm('确定删除吗？')\">删除</a>
<a   href='employeereg.php'>修改</a></td>";

    echo"<tr>";
}


?>
</table>

</body>

</html>