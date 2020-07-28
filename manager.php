<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>店长页面</title>
	<style>
	.div {
    display: inline-block;
    padding: .3em .5em;
    background-image: linear-gradient(#ddd, #bbb);
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3em;
    box-shadow: 0 1px white inset;
    text-align: center;
    text-shadow: 0 1px 1px black;
    color:white;
    font-weight: bold;
}
	.div:active{
    box-shadow: .05em .1em .2em rgba(0,0,0,.6) inset;
    border-color: rgba(0,0,0,.3);
    background: #bbb;
}
		.image{
		text-align:center;
		border: 1px solid #e7e7e7;
		flex:20%;
	}
		.b{
            
            text-align: center;    
        }
		.botCenter{width:100%; height:35px; line-height:35px; background:#FEEBA2; position:fixed; bottom:0px; left:0px; font-size:14px; color:#000; text-align:center;}
	</style>
</head>

<body background="bg.jpg">
<div class="div">
	<a href="homepage.php"><button>主页</button></a>
	</div>
	
    <div style="text-align:center">
	<table border="1" cellpadding="3" cellspacing="0" style="width: 35%;margin:auto">
	
		<tr bgcolor="#FEEBA2">
		<br><br><br><br><th colspan="3"><br>店长查询<br><br></th>
		</tr>
		<tr>
		<td style="background-image:url(店员信息查询.png);background-repeat:no-repeat" bgcolor="#FEEBA2"><br><br><br><br><a href="店员信息查询.php"><input type="button" value='店员信息查询' style="width: 90px; height: 30px;"></a><br><br></td>
		<td style="background-image:url(店员业绩查询.png);background-repeat:no-repeat" bgcolor="#FEEBA2"><br><br><br><br><a href="manager-EmployeePerformance.php"><input type="button" value='店员业绩查询' style="width: 90px; height: 30px;"></a><br><br></td>
		<td style="background-image:url(修改店员信息.png);background-repeat:no-repeat" bgcolor="#FEEBA2"><br><br><br><br><a href="modify_employee.php"><input type="button" value='修改店员信息' style="width: 90px; height: 30px;"></a><br><br></td>
		</tr>
		
		<tr>
		<td style="background-image:url(查看销售情况.png);background-repeat:no-repeat" bgcolor="#FEEBA2"><br><br><br><br><a href="manager-sale.php"><input type="button" value='查看销售情况' style="width: 90px; height: 30px;"></a><br><br></td>
		<td style="background-image:url(用户查询记录.png);background-repeat:no-repeat" bgcolor="#FEEBA2"><br><br><br><br><a href="用户查询记录.php"><input type="button" value='用户查询记录' style="width: 90px; height: 30px;"></a><br><br></td>
		<td style="background-image:url(用户购买记录.png);background-repeat:no-repeat" bgcolor="#FEEBA2"><br><br><br><br><a href="manager-OrderRecord.php"><input type="button" value='用户购买记录' style="width: 90px; height: 30px;"></a><br><br></td>
		</tr>		
	</table>
	</div>
	<div class="botCenter" >神奇书店在哪里</div>
</body>
</html>