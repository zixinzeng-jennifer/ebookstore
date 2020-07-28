<?php
$servername="localhost";
$username="root";
$password="";
$dbname="book";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");
session_start();
$loginname=$_POST['username'];
$loginpassword=$_POST['password'];
if(!($loginname && $loginpassword))
{ echo '<script language="JavaScript">;alert("用户名及密码不能为空");history.back();</script>';
}
else{$sql="SELECT * FROM user WHERE username='$loginname'AND password='$loginpassword'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    setcookie('uname',$loginname);
    setcookie('upsw',$loginpassword);
    $row=mysqli_fetch_array($result);
    setcookie('uno',$row['userno']);
    header("location:inhomepage.php");
}
else{
    echo '<script language="JavaScript">;alert("用户名或密码错误");history.back();</script>';
}
}
mysqli_close($conn);
?>