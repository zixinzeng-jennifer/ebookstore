<?php
$servername="localhost";
$username="root";
$password="";
$dbname="book";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");
$registername=$_POST['username'];
$registerpassword=$_POST['password'];
if(!($registername && $registerpassword))
{ echo '<script language="JavaScript">;alert("用户名及密码不能为空");history.back();</script>';
}
else{$sql="SELECT userno FROM user ORDER BY userno DESC";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$registerno=(int)$row['userno']+1;
$sql="INSERT INTO user(userno,username,password) VALUES(".$registerno.",'".$registername."','".$registerpassword."')";
echo $sql;
mysqli_query($conn,$sql);
{ echo '<script language="JavaScript">;alert("注册成功");history.back();</script>';
}
}
mysqli_close($conn);
?>