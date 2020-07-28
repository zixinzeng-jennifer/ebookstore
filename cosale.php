<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cosale</title>
</head>

<body>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="book";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}

$result=mysqli_query($conn,"select `ISBN` from `book`");
$n=0;
while($n<23){
$row=mysqli_fetch_array($result);
$ISBN=$row['ISBN'];
/*捆绑销售*/
/*初始化classirank值*/
$update1=mysqli_query($conn,"update `cosale-salerank` SET `classirank`=1");
/*初始化boughtrank值*/
$update2=mysqli_query($conn,"update `cosale-salerank` SET `boughtrank`=1");
/*初始化preferrank值*/
$update3=mysqli_query($conn,"update `cosale-salerank` SET `preferrank`=1");


/*相似度权值*/
$oriclassis=mysqli_query($conn,"select `ISBN2`,`sim` from `simbook` where `ISBN1`={$ISBN}");
$i=0;
while($i<22){
	$oriclassi=mysqli_fetch_array($oriclassis);
	/*echo $oriclassi['ISBN2']." ".$oriclassi['sim']."<br>"; 测试√ */
	$sql1=mysqli_query($conn,"update `cosale-salerank` set `classirank`={$oriclassi['sim']} where ISBN={$oriclassi['ISBN2']}");
	$i+=1;
}
/*用户购买信息加权*/
/*$userno='';*/

/*已购买过书籍权值0.1*/
$boughts=mysqli_query($conn,"SELECT `transaction`.`ISBN`,`order`.`userno` FROM `transaction`,`order` WHERE `order`.`userno`={$userno} and `transaction`.`sno`=`order`.`sno`");
	$m=0;
	while ($m<22){
		$bought=mysqli_fetch_array($boughts);
		$sql2=mysqli_query($conn,"UPDATE `cosale-salerank` SET `boughtrank`=0.1 WHERE `ISBN`={$bought['ISBN']}");
		$m+=1;
	}

/*已购买书籍相同类别权值1.3*/
$preferss=mysqli_query($conn,"SELECT `transaction`.`ISBN`,`book`.`classification`,`order`.`userno`  FROM `transaction`,`order`,`book` WHERE `transaction`.`ISBN`=`book`.`ISBN` AND `order`.`sno`=`transaction`.`sno` AND `order`.`userno`={$userno}");
	$p=0;
	while($p<22){
		$prefers=mysqli_fetch_array($preferss);
		$sql3=mysqli_query($conn,"SELECT `book`.`classification`,`transaction`.`ISBN` FROM `transaction`,`book` WHERE `transaction`.`ISBN`=`book`.`ISBN` AND `book`.`classification` LIKE '%{$prefers['classification']}%' ");
			$q=0;
			while($q<22){
				$prefer=mysqli_fetch_array($sql3);
				$sql4=mysqli_query($conn,"UPDATE `cosale-salerank` SET `preferrank`=1.3 WHERE `ISBN`={$prefer['ISBN']}");
				$q+=1;
	}
	$p+=1;
}

$sum=mysqli_query($conn,"UPDATE `cosale-salerank` SET `sumrank`=(`rank`+`classirank`+`boughtrank`+`preferrank`)");
$cosales=mysqli_query($conn,"SELECT `ISBN` FROM `cosale-salerank` WHERE ISBN NOT IN (SELECT `ISBN` FROM `cosale-salerank` WHERE `ISBN`={$ISBN}) ORDER BY `cosale-salerank`.`sumrank` DESC");
$u=0;
while($u<3){
	$cosale=mysqli_fetch_array($cosales);
	/*echo $cosale['ISBN']."<br>";  测试√*/
	$sql5=mysqli_query($conn,"select `cosale-salerank`.`id`,`cosale-salerank`.`sumrank`,`book`.`ISBN` FROM `book`,`cosale-salerank` WHERE `book`.`ISBN`={$cosale['ISBN'] } ORDER BY `cosale-salerank`.`sumrank`,`cosale-salerank`.`id` DESC");
	$v=0;
	while($v<1){
		$sql6=mysqli_fetch_array($sql5);
		/*echo $sql6['title']."<br>";测试√*/
		/*if ($sql6['ISBN']!=$ISBN){*/
			$insert="insert into `cosale`(`ISBN`,`co`,`userno`)values({$ISBN},{$sql6['ISBN']},{$userno})";
			$retval1= mysqli_query( $conn, $insert );
	if(! $retval1 )
	{
  		die('无法插入数据: ' . mysqli_error($conn));
	}
		echo "数据插入成功\n";
	$v+=1;
}
	$u+=1;		
	
	}
}

?>
</body>
</html>