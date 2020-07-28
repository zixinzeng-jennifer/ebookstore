<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>店长登录处理</title>
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
    $shopno=$_POST['shopno'];
    $managername= $_POST['managername'];
    $password= $_POST['password'];

if ($managername && $password && $shopno){
    $check_sql="select * from manager where managername='$managername' AND password='$password' and shopno='$shopno'";
    $result=mysqli_query($conn,$check_sql);


    if(mysqli_num_rows($result)==1 ){
        setcookie('shopno',$shopno);
        setcookie('managername',$managername);
        setcookie('password',$password);
        header("location:manager.php");
        exit();
    }else{
        echo '<script language="JavaScript">;alert("店长名或密码错误");history.back();</script>';
    }
}else{
    echo "表单填写不完整";
}
    mysqli_close($conn);
?>
</body>
</html>