<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>homepage</title>
<style>
a.comsearch{
float:left;
display:flex;
text-align:center;
text-decoration:none;
color:#666;
margin-top:10px;
padding:9px 6px;
font-size:90%;
}


a.comsearch .active {
    color: white;
    background-color: #4CAF50;
}
a.comsearch:hover{
background-color: #ddd;
}


.left{
	flex:20%;
	background-color:#FFFAF0;
	
}
.leftnav
{
	list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    height:100%;
	}
li.left a {
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  height: 12%;
  display:block;
	}
li.left a:hover:not(.active) {
    background-color: #ddd;
}
li.left a.active {
    color: white;
    background-color: #4CAF50;
}
.row{
	display:flex;
	flex-wrap:wrap;
	border: 1px solid #e7e7e7;
	background-position:-9% 5%;
	background-repeat:repeat;
	}
.main{
	flex:50%;
	border: 1px solid #e7e7e7;
	}
.right{
	flex:25%;
	text-align:center;
	border: 1px solid #e7e7e7;
	background-color:#FFFAF0;
	}
.hor{
		text-align:center;
		padding:20px;
		border: 1px solid #e7e7e7;
		background-image:url('bg.jpg');
		background-position:-10%;
		background-repeat:repeat;
	}
.navitem{
	flex:7%;
	text-decoration:none;
	text-align:center;
	padding-top:10px;
	padding-bottom:10px;
	padding-right:3px;
	font-size:90%;
	
	}
.navitem a:hover:not(.active) {
    background-color: #ddd;
}
.navitem a {
  	display: block;
  	color: #666;
  	text-align: center;
  	text-decoration: none;
	padding-top:10px;
	padding-bottom:10px;
	padding-right:3px;
	}
.navitem a.active {
    color: white;
    background-color: #4CAF50;
}
.book{
		flex:24%;
		text-align:center;
		border: 1px solid #e7e7e7;
		background-color:#FFFAF0;
	}
.image{
		text-align:center;
		border: 1px solid #e7e7e7;
		flex:20%;
	}
input[type=button],input[type=reset] {
  background-color: #e7e7e7;
  border: none;
  color: #666;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=button]:hover {
  background-color: #4CAF50;
  color:white;
  font-weight:bold;
}
input[type=submit]:hover {
  background-color: #4CAF50;
}
#searchicon{
height:auto;
float:left;
padding: 14px 16px;
width:10%;
margin:5px;
}
#search{
height:auto;
text-align:left;
padding: 16px 14px 16px 60px;
margin:5px;
width:60%;
float:left;
background-repeat:no-repeat;
background-image:url('timg.jpg');
background-size:45px 45px;
}
a.totop {
    position:fixed;
    left:10px;
    bottom:10px;
    text-decoration:none;
    display:block;
    padding:10px;
    background-color:#ddd;
    color:white;
    font-weight:bold;
}
a.totop:hover {
     background-color: #4CAF50;
     color:white;
}
.info{
   
    width:20%;
    float:left;
    height:150px;
    padding:15px;
    overflow:auto;
}
.image1{
    width:12%;
    height:150px;
    float:left;
    padding: 30px;
    text-align:center;
}
.book1{
   width:100%;
   float:right;
}
</style>
<script language="Javascript">
function logout()
{ 
	window.location.href='homepage.php';
	}
function personalsale()
{
	document.form1.action="personalsale.php";
	document.form1.submit();
	}
function get(num)
{
	btn=document.getElementById(num);
	str="classification_";
	str+=num;
	if (btn.value=='展开') {document.getElementById(str).style.display="block";
		btn.value='收起';}
	else{
		document.getElementById(str).style.display="none";
		btn.value='展开';
		}
}
</script>
</head>

<body>
<div class="row" style="background-image:url('bg.jpg');">
	<div class="navitem" style="flex:4%;"><a target="_blank"  href="_blank"><img src="00.png" height=30% width=30%></a></div>
	<div class="navitem" ><a href="inhomepage.php" >首页</a></div>
	<div class="navitem"><a href="_blank" >会员优惠</a></div>
	<div class="navitem"><a href="_blank" >使用说明</a></div>
	<div class="navitem"><a href="shop1.php" >分店1</a></div>
	<div class="navitem"><a href="shop2.php" >分店2</a></div>
	<div class="navitem"><a href="shop3.php" >分店3</a></div>
	<div class="navitem"><a href="shop4.php" >分店4</a></div>
</div>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="book";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");
$sql="SELECT sno, shopno, orderdate FROM `order` WHERE userno='".$_COOKIE['uno']."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0){echo'<div style="width:100%;height:300px;padding:50px;text-align:left;font-size:25px;>您还没有订单</div>';}
else{
while($row=mysqli_fetch_array($result))/*单笔订单*/
{
echo'<div style="width:100%;">';
echo '<div style="width:30%;  margin-left:0px; float:left; text-align:center; font-size:25px; background-color: #4CAF50;
     color:white;">书店编号：'.$row['shopno'].'</div>';
echo '<div style="width:70%; float:left; text-align:left; font-size:25px;background-color: #4CAF50;
     color:white;">消费日期：'.$row['orderdate'].'</div>';
echo '</div>';
$sqldetail="SELECT  url, book.ISBN, book.title, number, sale FROM book,transaction WHERE book.ISBN=transaction.ISBN AND transaction.sno='".$row['sno']."'";
$resultdetail=mysqli_query($conn,$sqldetail);
while($rowdetail=mysqli_fetch_array($resultdetail))
{
    echo'<div class="image1" style="float:left;"><a target="_blank" href="_blank"><img src="'.$rowdetail['url'].'" height="150"></a></div>';
    echo'<div style="float:left;width:25%;text-align:center; padding-top:60px; font-size:25px; height:150px;">ISBN：'.$rowdetail['ISBN'].'</div>';
    echo'<div style="float:left;width:25%;text-align:center; padding-top:60px; font-size:25px;height:150px;">书名：'.$rowdetail['title'].'</div>';
    echo'<div style="float:left;width:10%;text-align:center; padding-top:60px; font-size:25px;height:150px;">单价：$'.$rowdetail['sale'].'</div>';
    echo'<div style="float:left;width:20%;text-align:center; padding-top:60px; font-size:25px;height:150px;">数目：'.$rowdetail['number'].'</div>';
}
$sqldetail="SELECT SUM(number*sale)AS total FROM book,transaction WHERE book.ISBN=transaction.ISBN AND transaction.sno='".$row['sno']."'";
$resultdetail=mysqli_query($conn,$sqldetail);
$rowdetail=mysqli_fetch_array($resultdetail);
echo '<div style="width:100%;"><div style="width:100%; float:right; text-align:right; font-size:25px; padding-right:120px; padding-top:10px; padding-bottom:10px;background-color: lightgreen;
     color:white;overflow:hidden;">总计：$'.$rowdetail['total'].'</div></div>';
}
}
?>
<div style="width:100%;
	 background-position:-15% 5%;
	background-repeat:repeat; background-image:url('bg.jpg'); float:left;">
<div  style="text-align:right; width:35%; float:left;"><p>使用说明</p><br/><a href="_blank">使用流程</a><br/><a href="_blank">会员优惠</a></div>
<div  style="text-align:center; width:30%; float:left;"><p>分类导航</p><br/>&nbsp;<a href=#c4 onclick=" return get(4);">&nbsp;&nbsp;教材</a> &nbsp;&nbsp;&nbsp;    <a href=#c1 onclick=" return get(1);">计算机</a><br/><a href=#c7 onclick=" return get(7);">&nbsp;&nbsp;理工      </a>  &nbsp;&nbsp;&nbsp;   <a href=#c2 onclick=" return get(2);">人文&nbsp;&nbsp;</a><br/><a href=#c3 onclick=" return get(3);">&nbsp;&nbsp;社科     </a>   &nbsp;&nbsp;&nbsp;  <a href=#c5 onclick=" return get(5);">经管&nbsp;&nbsp;</a><br/><a href=#c6 onclick=" return get(6);">&nbsp;&nbsp;医学     </a>&nbsp;&nbsp;&nbsp;<a href=#c8 onclick=" return get(8);">     其他&nbsp;&nbsp;</a></div>
<div  style="text-align:left; width:35%; float:left;"><p>分店导航</p><br/><a href="shop1.php">分店1</a><br/><a href="shop2.php">分店2</a><br/><a href="shop3.php">分店3</a><br/><a href="shop4.php">分店4</a><br/></div>
<div style="hor"></div>
</div>
</body>
</html>