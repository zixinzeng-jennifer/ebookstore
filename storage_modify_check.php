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



$ISBN = $_POST["ISBN"];
$shopno = $_POST["shopno"];
$storage = $_POST["storage"];

if(!($ISBN ))
{ echo '<script language="JavaScript">;alert("ISBN不能为空");history.back();</script>';
}
else{$sql="replace into storage VALUES('$_POST[ISBN]','$_POST[shopno]','$_POST[storage]') ";
mysqli_query($conn,$sql);
{ echo '<script language="JavaScript">;alert("操作成功");history.back();</script>';
}
}
mysqli_close($conn);
?>