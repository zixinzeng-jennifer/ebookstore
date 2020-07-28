<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>店长登陆系统</title>
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
</head>
<body background="bg.jpg">
	
		
	<form method="post" action="managerlogin_check.php">
		<hx>店长登录</hx><br><br><br>
		<div id="b">
		shopno:
		<select name="shopno"select style="width: 200px;height:29px">
        <option >1</option>
        <option >2</option>
        <option >3</option>
		<option >4</option>
        </select><br>
		managername:
		<input type="text" name="managername" select style="width: 200px;height:20px"><br>
		password:
		<input type="password" name="password" select style="width: 200px;height:20px"><br><br>
		</div>
		
		<div class="a">
		<input name="submit" type="submit" value="login" style="width: 85px; height: 30px;"><br>		
		<a href="managerreg.php"><input type="button" value='register' style="width: 85px; height: 30px;"></a>
		</div>
		
	</form>

	
	
</body>
	
</html>