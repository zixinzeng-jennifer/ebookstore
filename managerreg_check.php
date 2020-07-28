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

    
		$managerno = $_POST["managerno"];
        $managername = $_POST["managername"];  

        $psw = $_POST["password"];  

        $psw_confirm = $_POST["confirm"];
		$shopno = $_POST["shopno"];
		$managergender = $_POST["managergender"];
		$managercontact = $_POST["managercontact"];

        if(!($managerno && $managername && $psw && $psw_confirm && $shopno && $managergender && $managercontact))
{ echo '<script language="JavaScript">;alert("请补全信息");history.back();</script>';
}
else
{$sql="INSERT INTO manager VALUES('$_POST[managerno]','$_POST[managername]','$_POST[shopno]','$_POST[managergender]','$_POST[managercontact]','$_POST[password]')";
echo $sql;
mysqli_query($conn,$sql);
{ echo '<script language="JavaScript">;alert("注册成功");history.back();</script>';
}
}
mysqli_close($conn);
?>