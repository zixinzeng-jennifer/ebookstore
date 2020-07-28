<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>店员登录处理</title>
</head>
<body>
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

    session_start();
    $employeeno= $_POST['employeeno'];
    $password= $_POST['password'];
    $shopno=$_POST["shopno"];

    if ($employeeno && $password && $shopno){
        $check_sql="select * from employee where employeeno='$employeeno' AND password='$password' and shopno='$shopno'";
        $result=mysqli_query($conn,$check_sql);


		if(mysqli_num_rows($result)==1 ){
            setcookie('shopno',$shopno);
            setcookie('employeeno',$employeeno);
            setcookie('password',$password);
            header("location:employee.php");
			exit();
        }else{
            echo '<script language="JavaScript">;alert("店员名或密码错误");history.back();</script>';
        }
    }else{
		echo "表单填写不完整";
    }

    mysqli_close($conn);
?>
</body>
</html>