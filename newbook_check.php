<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>新书录入处理</title>
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
	    
    
    $title= $_POST['title'];
    $ISBN= $_POST['ISBN'];
	$publisher= $_POST['publisher'];
    $edition= $_POST['edition'];
    $price= $_POST['price'];
    $Cintroduction= $_POST['Cintroduction'];
	$Eintroduction= $_POST['Eintroduction'];
    $allauthor= $_POST['allauthor'];
	$alltranslator= $_POST['alltranslator'];
	$classification= $_POST['classification'];
    $number= $_POST['number'];
	$photo_url= $_POST['photo_url'];

	
	$book_check= "select  ISBN from book where ISBN ='$ISBN'";
	$result_check = mysqli_query($conn,$book_check);
	$data_check = mysqli_fetch_row($result_check);
	
	$storage="select  storage from storage where ISBN ='$ISBN' and shopno='".$_COOKIE['shopno']."'";
	$storage_result = mysqli_query($conn, $storage);
	$row=mysqli_fetch_array($storage_result);
	$new_data=$row['storage']+$number;
	
	$book_into="insert into book values('$_POST[title]','$_POST[ISBN]','$_POST[publisher]','$_POST[edition]','$_POST[price]','$_POST[Cintroduction]','$_POST[Eintroduction]','$_POST[allauthor]','$_POST[alltranslator]','$_POST[classification]','$_POST[photo_url]')";

	$storage_into="insert into storage values('$_POST[ISBN]','".$_COOKIE['shopno']."','$_POST[number]')";

	$storage_update="UPDATE storage SET storage='".$new_data."' WHERE ISBN ='$_POST[ISBN]' and shopno='".$_COOKIE['shopno']."'";

	
	if($title && $ISBN && $classification && $number && $photo_url){
		if(!($data_check)){
            mysqli_query($conn,$book_into);
            mysqli_query($conn,$storage_into);
		    echo '<script language="JavaScript">;history.back();alert("录入成功")</script>';
		}else{ 
		mysqli_query($conn,$storage_update);
		echo '<script language="JavaScript">;alert("录入成功");history.back();</script>';}
	}else{ 
		echo '<script language="JavaScript">;alert("请补全信息");history.back();</script>';


	}
			 
mysqli_close($conn);
?>
</body>
</html>