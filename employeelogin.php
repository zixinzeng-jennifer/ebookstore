<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>店员登陆系统</title>
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
	
		
	<form method="post" action="employeelogin_check.php">
		<hx>店员登录</hx><br><br><br>
		<div id="b">
		shopno:
		<select name="shopno"  select style="width: 200px;height:29px">
        <option >1</option>
        <option >2</option>
        <option >3</option>
		<option >4</option>
        </select><br>
		employeeno:
		<input type="text" name="employeeno" select style="width: 200px;height:20px"><br>
		password:
		<input type="password" name="password" select style="width: 200px;height:20px"><br><br>
		</div>
		
		<div class="a">
		<input name="submit" type="submit" value="login" style="width: 85px; height: 30px;"><br>		
		<a href="employeereg.php"><input type="button" value='register' style="width: 85px; height: 30px;"></a>
		</div>
		
	</form>

	
	
</body>
	
</html>