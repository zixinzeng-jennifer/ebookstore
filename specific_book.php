<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>specific_book</title>
<style>

#search
	{
		width: 180px;
		height:40px;
  		box-sizing: border-box;
  		border: 2px solid #ccc;
  		border-radius: 4px;
  		font-size: 12px;
  		background-color: white;
  		padding: 10px 0px 10px 5px;
	}
.book{
    flex:24%;
    text-align:center;
    border: 1px solid #FEFDED;
    background-color:#FEFDED;
}

.row{
	display:flex;
	flex-wrap:wrap;
	border: 1px solid #e7e7e7;
	}

.navitem{
	flex:70%;
	text-decoration:none;
	text-align:center;
	padding-top:5px;
	padding-bottom:5px;
	padding-right:3px;
	font-size:90%;
	font-weight:bold;
	}
.navitem a:hover:not(.active) {
    background-color: #ddd;
}
.navitem a{
  	display: block;
  	color: #666;
  	text-decoration: none;
	padding-top:3px;
	padding-bottom:3px;
	padding-right:3px;
	}
.navitem a.active {
    color: white;
    background-color: #4CAF50;
}
.image{
		text-align:center;
		border: 1px solid #FEFDED;
		flex:40%;
	}
.row{
	display:flex;
	flex-wrap:wrap;
	border: 1px solid #e7e7e7;
	background-position:-9% 5%;
	background-repeat:repeat;
	}
.left{
	flex:20%;
	background-color:#FEFDED;
}
.main{
	flex:30%;
	border: 1px solid #e7e7e7;
    text-align: center;
	}
.right{
	flex:28%;
	text-align:center;
	border: 1px solid #e7e7e7;
	background-color:#FFFAF0;

	}
.hor{
    text-align:center;
    border: 1px  ;
    background-position:-10%;
    background-repeat:repeat;
	background-color: #FFFAF0;

}
	
</style>
</head>
<body style="background-color:#FEFDED "  >	

	

<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="book";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
	
$ISBN=$_GET['ISBN'];


echo'<div class="row" >';

if(isset($_COOKIE['uno'])){
    $sql_query = "SELECT ISBN FROM collection WHERE userno='".$_COOKIE['uno']."'";
    $result = mysqli_query($conn, $sql_query);
    $flag = 0;
    if(!empty($result)){
        while($row=mysqli_fetch_array($result)){
            if($ISBN==$row['ISBN']){
                $flag = 1;
            }
        }
    }
    if($flag==1) {
        echo'<div class="navitem" style="flex: 10%;background-color: #FFFAF0;" ><a  href="inhomepage.php" >返回</a></div>';
        echo'<div class="navitem" style="flex:70%;background-color: #FFFAF0"></div>';
        echo "<div class=\"navitem\" style=\"flex: 10%;background-color:#FFFAF0; \" >
                <button  style='width: 80px;height: 30px;font-weight:bold;background-color: #FEFDED' 
                onclick=window.open('collection_check.php?ISBN=$ISBN&collection=取消收藏','_self')>取消收藏</button></div>";
    }else{
        echo'<div class="navitem" style="flex: 10%;background-color: #FFFAF0;" ><a  href="inhomepage.php" >返回</a></div>';
        echo'<div class="navitem" style="flex:70%;background-color: #FFFAF0"></div>';
        echo "<div class=\"navitem\" style=\"flex: 10%;background-color:#FFFAF0; \" >
            <button  style='width: 80px;height: 30px;font-weight:bold;background-color: #FEFDED' 
            onclick=window.open('collection_check.php?ISBN=$ISBN&collection=点击收藏','_self')>点击收藏</button></div>";
    }

}else{
    echo'<div class="navitem" style="flex: 10%;background-color: #FFFAF0;" ><a  href="homepage.php" >返回首页</a></div>';
    echo'<div class="navitem" style="flex:70%;background-color: #FFFAF0"></div>';
    echo "<div class=\"navitem\" style=\"flex: 10%;background-color:#FFFAF0; \" ><button id=\"hiddenBtn\" style=\"background-color:#FFFAF0; 
        display:none;VISIBILITY: hidden\")>hidden</button></div>";

}


echo'</div>';
	
mysqli_query($conn,"SET NAMES utf8");
	$result1=mysqli_query($conn,"SELECT title,book.ISBN,publisher,edition,Cintroduction,Eintroduction,classification, allauthor, alltranslator, url FROM book where book.ISBN='".$ISBN."' ");
    $row=mysqli_fetch_array($result1);
echo'<div class="row">';

	echo '<div class="left">';
	echo'<div class="image"><img src="'.$row['url'].'" height="150"></div>';
	echo'</div>';

	echo '<div class="main">';
echo'<table border="1" style="text-align: center;width: 50%;margin-left: 25%;margin-top:10px" >';
	echo "<tr><td >书名：</td><td>《".$row['title']."》</td></tr>" ;
    if(strlen($row['alltranslator']==0))
    {echo "<tr><td>作者:</td><td>".$row['allauthor']."</td></tr>";}
    else{ echo "<tr><td>作者:</td><td>".$row['allauthor']. "</td></tr> 
    <tr><td>译者:</td><td>".$row['alltranslator'] . "</td></tr>";}
    echo "<tr><td>出版社:</td><td>".$row['publisher']."</td></tr>";
    echo "<tr><td>分类:</td><td>".$row['classification']."</td></tr>";
    echo "<tr><td>版本：</td><td>第".$row['edition']."版</td></tr>";
    echo "</table>";
    echo '</div>';




    echo '<div class="right" style="border: 1px solid #000000;background-color:  #FEFDED">';

$sql="select storage.shopno,storage.storage,shop.shopaddress from storage,shop where storage.ISBN='".$ISBN."' AND storage.shopno=shop.shopno";
$retval = mysqli_query($conn,$sql);
$num=mysqli_num_rows($retval);


    echo '<table border="1" style="margin-top:10px;margin-left: 7px ">';

    echo'<tr>
    <td>分店</td>
    <td>库存</td>
    <td>地址</td>
    </tr>';

    for ($i=0; $i <$num ; $i++) {
    $row=mysqli_fetch_assoc($retval);
    $shopno=$row['shopno'];
    $storage=$row['storage'];
    $shopaddress=$row['shopaddress'];
    echo "<tr><td>$shopno</td><td>$storage</td><td>$shopaddress</td></tr>";
    }

    echo'</table>';
    echo '</div>';
echo '</div>';

$result1=mysqli_query($conn,"SELECT title,book.ISBN,publisher,edition,Cintroduction,Eintroduction,classification, allauthor, alltranslator, url FROM book where book.ISBN='".$ISBN."' ");
$row=mysqli_fetch_array($result1);

echo'<div class="row">';
echo'<div class="hor"  style="width: 50%">中文简介</div>';
echo'<div class="hor" style="width: 50%">英文简介</div>';
echo'</div>';

echo'<div class="row">';
echo'<div class="left"  style="background-color: #FEFDED;width: 50%;">';
	echo $row['Cintroduction'];
	echo '</div>';

echo'<div class="right" style="background-color: #FEFDED;width: 50%;">';
echo $row['Eintroduction'];
echo '</div>';

echo '</div>';
//echo($row['ISBN']);
$query=mysqli_query($conn,"SELECT * FROM simbook WHERE ISBN1='".$row['ISBN'] ."'ORDER BY sim DESC");


$i=0;
echo'<div class="hor">相似推荐</div><div class="row">';
while($i<4){
    $query2=mysqli_fetch_array($query);
    $result=mysqli_query($conn,"SELECT book.ISBN, title, publisher, price, classification, allauthor, alltranslator,url FROM book WHERE book.ISBN='".$query2['ISBN2']."'");
    $row=mysqli_fetch_array($result);
    echo'<div class="book"><div class="image"><a href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo "《".$row['title'] ."》 " . "$".$row['price']."<br>";
    if(strlen($row['alltranslator']==0))
    {echo "作者:".$row['allauthor']."<br>";}
    else{ echo "作者:".$row['allauthor']. "  译者:".$row['alltranslator'] . "<br>";}
    echo "出版社:".$row['publisher']." "."分类:".$row['classification']."<br>";
    echo '</div>';
    $i+=1;
}
echo '</div>';

$ISBN=$_GET['ISBN'];
/*计算该书折扣价*/
$oriprices=mysqli_query($conn,"select `price`,`pprice` from `book` where ISBN={$ISBN}");
$a=0;
while($a<1){
	$oriprice=mysqli_fetch_array($oriprices);
	$a+=1;
	$orisale=($oriprice['price']+$oriprice['pprice'])/2;
	}
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
if(isset($_COOKIE['uno'])){
	/*已购买过书籍权值0.1*/
	$boughts=mysqli_query($conn,"SELECT `transaction`.`ISBN`,`order`.`userno` FROM `transaction`,`order` WHERE `order`.`userno`={$_COOKIE['uno']} and `transaction`.`sno`=`order`.`sno`");
	$m=0;
	while ($m<22){
		$bought=mysqli_fetch_array($boughts);
		$sql2=mysqli_query($conn,"UPDATE `cosale-salerank` SET `boughtrank`=0.1 WHERE `ISBN`={$bought['ISBN']}");
		$m+=1;
	}
	/*已购买书籍相同类别权值1.3*/
	$preferss=mysqli_query($conn,"SELECT `transaction`.`ISBN`,`book`.`classification`,`order`.`userno`  FROM `transaction`,`order`,`book` WHERE `transaction`.`ISBN`=`book`.`ISBN` AND `order`.`sno`=`transaction`.`sno` AND `order`.`userno`={$_COOKIE['uno']}");
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
}	
$sum=mysqli_query($conn,"UPDATE `cosale-salerank` SET `sumrank`=(`rank`+`classirank`+`boughtrank`+`preferrank`)");
$cosales=mysqli_query($conn,"SELECT `ISBN` FROM `cosale-salerank` WHERE ISBN NOT IN (SELECT `ISBN` FROM `cosale-salerank` WHERE `ISBN`={$ISBN}) ORDER BY `cosale-salerank`.`sumrank` DESC");
$u=0;
echo'<div class="hor">优惠组合</div>';
echo'<div class="hor"><font color="#7B7777">(注：与下列图书任意一本一起购买享受超值优惠)</font></div><div class="row">';
while($u<3){
	$cosale=mysqli_fetch_array($cosales);
	/*echo $cosale['ISBN']."<br>";  测试√*/
	$sql5=mysqli_query($conn,"select `cosale-salerank`.`id`,`cosale-salerank`.`sumrank`,`book`.`ISBN`,`book`.`url`,`book`.`ISBN`,`book`.`title`,`book`.`price`,`book`.`pprice`,`book`.`allauthor`,`book`.`alltranslator`,`book`.`publisher`,`book`.`classification` FROM `book`,`cosale-salerank` WHERE `book`.`ISBN`={$cosale['ISBN'] } ORDER BY `cosale-salerank`.`sumrank`,`cosale-salerank`.`id` DESC");
	$v=0;
	while($v<1){
		$sql6=mysqli_fetch_array($sql5);
		/*echo $sql6['title']."<br>";测试√*/
		/*if ($sql6['ISBN']!=$ISBN){*/
			echo'<div class="book"><div class="image"><a href="specific_book.php?ISBN='.$sql6['ISBN'].'"><img src="'.$sql6['url'].'" height="150"></a></div>';
    		echo "《".$sql6['title'] ."》 "."<br>";
			echo "售价：$".$sql6['price']."<br>";
			echo'<font color="#7B7777">';
			echo "组合原价：$".($sql6['price']+$oriprice['price'])."<br>";
			echo'</font>';
			echo'<font color="#F6191D">';
			echo "组合售价：$".(($sql6['price']+$sql6['pprice'])/2+$orisale)."<br>";
			echo '</font>';
			echo'<font color="#F6191D"><strong>';
			echo "立省：$".(($sql6['price']-$sql6['pprice'])/2+($oriprice['price']-$oriprice['pprice'])/2)."<br>";
			echo '</font></strong>';
    		if(strlen($sql6['alltranslator']==0))
    			{echo "作者:".$sql6['allauthor']."<br>";}
    		else{ echo "作者:".$sql6['allauthor']. "  译者:".$sql6['alltranslator'] . "<br>";}
    		echo "出版社:".$sql6['publisher']." "."分类:".$sql6['classification']."<br>";
    		echo '</div>';
			$v+=1;
		/*}
		else{
		}*/
	}
	$u+=1;
}

mysqli_close($conn);
?>
	
</body>
</html>