<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>店员页面</title>  
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
		<br><br><br><br><th colspan="3"><br>店员查询<br><br></th>
		</tr>
		<tr >
		<td  style="background-image:url(newbook.png);background-position:center; background-repeat:no-repeat" bgcolor="#FEEBA2"><br><br><br><br><a href="booksearch.php"><input type="button" value='新书入库' style="width: 85px; height: 30px;"></a><br><br></td>
		<td style="background-image:url(storage.png);background-position:center;background-repeat:no-repeat" bgcolor="#FEEBA2"><br><br><br><br><a href="storage.php"><input type="button" value='库存信息' style="width: 85px; height: 30px;"></a><br><br></td>
            <td style="background-image:url(查看销售情况.png);background-repeat:no-repeat" bgcolor="#FEEBA2"><br><br><br><br><a href="employeeordering.php"><input type="button" value='生成订单' style="width: 85px; height: 30px;"></a><br><br></td>
		</tr>		
	</table>
	</div>
	
	<div class="botCenter" >神奇书店在哪里</div>
</body>
</html>