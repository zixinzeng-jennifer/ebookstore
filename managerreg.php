<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
body,td,th {
	font-size: 20px;
}
.a{
            width: 1200px;
            height: 30px;
	        text-align:center
			
             
        }
        #b{
            width: 700px;           
            text-align: right;        /*右对齐*/·
        }
</style>
<title>店长注册</title>
</head>
	<body background="bg.jpg">
		<form action="managerreg_check.php" method="post">
			<hx>店长注册</hx><br><br><br>
			<div id="b">
			managerno:<input type="text" name="managerno"/><br/>
			managername：<input type="text" name="managername"/><br/>
			password:<input type="password" name="password"/><br/>
		    confirm：<input type="password" name="confirm"/><br/>
			shopno:<input type="text" name="shopno"/><br/>
				
			managergender:<input type="text" name="managergender"/><br/>
			managercontact：<input type="text" name="managercontact"/><br/>	
			
			</div>
			
			<div class="a">
			<input type="Submit" name="Submit" value="register" style="width: 85px; height: 30px;"/>  
			</div>
		</form>


</body>
</html>