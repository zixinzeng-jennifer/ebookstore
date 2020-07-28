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
padding:14px 0px;

}


a.comsearch .active {
    color: white;
    background-color: #4CAF50;
}
a.comsearch :hover:not(.active){
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
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
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
	font-weight:bold;
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
.shop{
		flex:24%;
		text-align:center;
		border: 1px solid #e7e7e7;
		background-color:#FFFAF0;
		
}
.shopimage{
		text-align:center;
		border: 1px solid #e7e7e7;
		flex:20%;
	}
#pop
.black_overlay{ 
            display: none; 
            position: absolute; 
			color:#666;
            top: 0%; 
            left: 20%;
			right:40%
            width: 40%; 
            height: 40%; 
            background-color: black; 
            z-index:1001; 
            -moz-opacity: 0.8; 
            opacity:.80; 
            filter: alpha(opacity=88); 
        } 
.white_content {
	display: none;
	position: absolute;
	color: #666;
	top: 20%;
	left: 24%;
    width: 50%; 
	height: 60%;
	padding-top: 30px;
	padding-right: 30px;
	padding-left: 30px;
	padding-bottom: 30px;
	border: 10px solid #e7e7e7;
	background-color: white;
	z-index: 1002;
	overflow: auto;
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
background-image:url('time.jpg');
background-size:45px 45px;
}
input[type=button],input[type=reset] {
  background-color: #e7e7e7;
  border: none;
  color: #666;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-weight:bold;
}

input[type=button]:hover {
  background-color: #4CAF50;
  color:white;
}
input[type=submit]:hover {
  background-color: #4CAF50;
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

#top .navitem a {
}
</style>
<script language="JavaScript">

	function login()
	{ 
		document.form1.action="login.php";
		document.form1.submit();
		}
	function register()
	{
		document.form1.action="register.php";
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

	function searchpost()
	{
		var form6=document.form6;
		var s=document.getElementById('search').value;
		//alert(s);
		var url="search.php?type=1&bookprice=all&bookshop=all&search="+s;
		form6.action=url;
		form6.method="post";
		form6.submit();
	}
	
</script>
</head>
<body>
<div id="top" class="row" style="background-image:url('bg.jpg');">
	<div class="navitem" style="flex:4%;"><a target="_blank"  href="_blank"><img src="00.png" height=50% width=50%></a></div>
	<div class="navitem" ><a  class="active" href="homepage.php" >首页</a></div>
	
  <div class="navitem" >
	<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">关于会员</a></div>
<span style="white-space: pre-wrap"><div id="light" class="white_content">
<span style="float: right"><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none' "><img src="close.png" height=50% width=50%></a></span>
<center><strong>关于会员</strong></center>
<strong>如何成为会员？</strong>
在本店注册用户即可成为会员。
注：注册功能在首页登录区
<strong>会员特权</strong>
1.享受组合优惠；
2.查看购买记录；
3.查看历史搜索记录。
<strong>会员注销</strong>
当您想拥有新账号，您只需要重新注册，不需要将原有账号注销。如果您的客户帐户被注销，那么您也将丧失您的会员资格。

</div>
</span>
<div id="fade" class="black_overlay"></div> 
	
  <div class="navitem" >
	<a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='block';document.getElementById('fade2').style.display='block'">使用说明</a></div>
	
	
<span style="white-space: pre-wrap"><div id="light2" class="white_content">
<span style="float: right"><a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='none';document.getElementById('fade2').style.display='none' "><img src="close.png" height=50% width=50%></a></span>
<center><strong>使用说明</strong></center>
<strong>注册操作说明</strong>
第一步：点击首页登录框内的“注册”按钮进入注册页面。
第二步：输入用户名和密码，点击“注册”（注：请务必记清密码）。
第三步：注册完成后，使用首页登录框正常登录即可。
<strong>购物流程</strong>
注册/登录：设置用户名和密码以注册账号，并登录。
搜索商品：分类导航查找；关键字搜索；高级搜索。
提交订单：填写收货人、地址、书目信息完成书目购买。
<strong>搜索商品</strong>
您可以在首页搜索框内输入关键字搜索商品，也可以点击高级搜索按照具体的书目信息（如：书名、作者/译者、出版社等）进行搜索，还可以通过浏览首页的分类导航查找您所需的书目。
<strong>分店页面</strong>
分店页面提供按价格、分类、国家等的筛选功能。分店页面展示该分店畅销书目与打折情况，您可以在多个分店中做出选择。
<strong>提交订单</strong>
详细填写收货人信息、送货方式、书目信息等，确认无误后点击“提交订单”。

</div> </span>
        <div id="fade" class="black_overlay"></div>

  <div class="navitem"><a href="shop1.php" >分店1</a></div>
	<div class="navitem"><a href="shop2.php" >分店2</a></div>
	<div class="navitem"><a href="shop3.php" >分店3</a></div>
	<div class="navitem"><a href="shop4.php" >分店4</a></div>
	<div class="navitem" style="float:right"><a href="employeelogin.php" >店员入口</a></div>
	<div class="navitem" style="float:right"><a href="managerlogin.php" >店长入口</a></div>
</div>
<div class="row">
	<div class="left">
	  <ul class="leftnav">
		<li class="left"><a href=#c4 onclick=" return get(4);">教材</a></li>
		<li class="left"><a href=#c1 onclick=" return get(1);">计算机</a></li>
		<li class="left"><a href=#c7 onclick=" return get(7);">理工</a></li>
		<li class="left"><a href=#c2 onclick=" return get(2);">人文</a></li>
		<li class="left"><a href=#c3 onclick=" return get(3);">社科</a></li>
		<li class="left"><a href=#c5 onclick=" return get(5);">经管</a></li>
		<li class="left"><a href=#c6 onclick=" return get(6);">医学</a></li>
		<li class="left"><a href=#c8 onclick=" return get(8);">其他</a></li>
	</ul>
	</div>

<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="book";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");

echo '	<div class="main">';
echo  ' <div style="height:auto"><form name="form6" method="post" >
				<input id="search" type="text" name="src" placeholder="输入书名、作者、译者、简介..." > <input type="button"  id="searchicon" value="搜索" onclick="searchpost()">
				<a class="comsearch" href="user-AdvancedSearch">高级检索</a></form> </div>
	<img src="0.png" height=auto width=100%></a>
	</div>
	<div class="right"><div class="image">
			<a target="_blank" href="_blank"><img src="login.png" height="150"></a>
		</div>
		<div>
			<form method="post" name="form1">
				用户  <input type="text" name="username"  style="height:30px; width:160px; margin-top:10px;">
				<br>
				<br>
				密码  <input type="password" name="password"  style="height:30px; width:160px;">
				<br>
				<br>
				<input type="button" value="登录"  onclick=login()>
				<br>
				<br>
				<input type="button" value="注册"   onclick=register()>
			</form>
		</div>
	</div>
</div>';
/*

$result=mysqli_query($conn,"select `ISBN`,sum(`number`)AS `allnumber`,`month`,`day` from `book-orderdate` where ((`month`={$month}-1) and (`day`>={$day})) or((`month`={$month}) and (`day`<={$day})) group by `ISBN` ORDER BY SUM(`number`)DESC");
$i=0;*/
$month=date("m");
$day=date("d");
$result=mysqli_query($conn,"select book.title,book.publisher, book.price, book.classification, book.allauthor, book.alltranslator,book.url,`book-orderdate`.`ISBN`,sum(`book-orderdate`.`number`),`book-orderdate`.`month`,`book-orderdate`.`day` from `book-orderdate`,`book` where (((`book-orderdate`.`month`={$month}-1) and (`book-orderdate`.`day`>={$day})) or((`book-orderdate`.`month`={$month}) and (`book-orderdate`.`day`<={$day}))) and book.ISBN=`book-orderdate`.`ISBN` group by `book-orderdate`.`ISBN` ORDER BY SUM(`book-orderdate`.`number`)DESC");
$i=0;
echo'<div class="hor">热销</div><div class="row">';
while($i<4){
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
echo'</div><div class="row">';
$i=0;
while($i<4){
    $row=mysqli_fetch_array($result);
    echo'<div class="book"><div class="image"><a  href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo "《".$row['title']."》 "."$".$row['price']."<br>";
    if(strlen($row['alltranslator']==0))
    {echo "作者:".$row['allauthor']."<br>";}
    else{ echo "作者:".$row['allauthor']. "  译者:".$row['alltranslator'] . "<br>";}
    echo "出版社:".$row['publisher']." "."分类:".$row['classification']."<br>";
    echo '</div>';
    $i+=1;
}	
echo'</div>';

echo'<div class="hor" >分店活动</div><div class="row">';
echo'<div class="shopimage"><a href="shop1.php"><img src="shop1.jpg" height="150"></a></div>';
echo'<div class="shop"><strong>北四环西路店(分店1)</strong><br>本月活动：<br><center>畅读文学月</center>
		<strong>活动细则：</strong><br>
		&#12288;2019.12.1~2019.12.31期间，在北四环西路店购买文学类书籍，在总店利润的基础上享受八五折优惠
		 <div class="navitem"><a href="shop1.php" ><font color="#935B06">查看详情</font></a></div>
		</div>';
echo'<div class="shopimage"><a href="shop2.php"><img src="shop2.jpg" height="150"></a></div>';
echo'<div class="shop"><strong>冰窖口胡同店(分店2)</strong><br>本月活动：<br><center>学生特惠月</center>
		<strong>活动细则：</strong><br>
		&#12288;2019.12.1~2019.12.31期间在冰窖口胡同店购买教材类书籍，单本30元以上打八五折，50元以上打八折
		<div class="navitem"><a href="shop2.php" ><font color="#935B06">查看详情</font></a></div>
		</div>';
echo'</div>';
echo'<div class="row">';
echo'<div class="shopimage"><a href="shop3.php"><img src="shop3.jpg" height="150"></a></div>';
echo'<div class="shop">红山路店(分店3)<br>本月活动：<br><center>年末大促</center>
		<strong>活动细则：</strong><br>
		&#12288;2019.12.15~2020.1.15在红山路店内购书享受以下满减优惠：满50元减5元，满100元减10元，满200元减15元
		<div class="navitem"><a href="shop3.php" ><font color="#935B06">查看详情</font></a></div>
		</div>';
echo'<div class="shopimage"><a href="shop4.php"><img src="shop4.jpg" height="150"></a></div>';
echo'<div class="shop">亚运村店(分店4)<br>本月活动：<br><center>双12购书狂欢节</center>
		<strong>活动细则：</strong><br>
		&#12288;2019.12.9~2019.12.15期间，凡在亚运村店购书（不分种类），2本以上享受八五折优惠，5本以上享受八折优惠
		<div class="navitem"><a href="shop4.php" ><font color="#935B06">查看详情</font></a></div>
		</div>';
echo'</div>';

	

echo'<div class="hor" id="c4">教材</div>';
echo'<span id="classification_4" style="display:none;">';
$result=mysqli_query($conn,"SELECT book.ISBN,title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification` WHERE book.ISBN=`book-classification`.ISBN AND `book-classification`.cno=4");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo '<div class="info">';
    echo '<div style="font-weight:bold; font-size:120%;">《'.$row['title'] .'》</div> ';
    echo '<br>';
    echo "作者:".$row['allauthor']. "  &nbsp;&nbsp;&nbsp;译者:".$row['alltranslator'] . "<br>";
    echo "<br>出版社:".$row['publisher']."&nbsp&nbsp&nbsp版本:".$row['edition']."<br><br>分类:".$row['classification']."<br>";
    echo '<br>';
    echo '</div>';
    echo '<div class="info">';
    echo "中文简介:".$row['Cintroduction'];
    echo'</div>';
    echo '<div class="info">';
    echo "英文简介:".$row['Eintroduction'];
    echo '</div>';
    echo '<div class="info" style="width:10%;  font-size:12px; padding-top:50px; text-align:center; font-weight:bold; font-size:30px;">';
    echo "$".$row['price'];
    echo '</div></div>';

}
echo'</span>';
echo'<input  id="4" type="button" value="展开"  onclick="return get(this.id)" style="width:100%;"/>';

echo'<div class="hor" id="c1">计算机</div>';
echo'<span id="classification_1" style="display:none;">';
$result=mysqli_query($conn,"SELECT book.ISBN,title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification` WHERE book.ISBN=`book-classification`.ISBN AND `book-classification`.cno=1");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo '<div class="info">';
    echo '<div style="font-weight:bold; font-size:120%;">《'.$row['title'] .'》</div> ';
    echo '<br>';
    echo "作者:".$row['allauthor']. "  &nbsp;&nbsp;&nbsp;译者:".$row['alltranslator'] . "<br>";
    echo "<br>出版社:".$row['publisher']."&nbsp&nbsp&nbsp版本:".$row['edition']."<br><br>分类:".$row['classification']."<br>";
    echo '<br>';
    echo '</div>';
    echo '<div class="info">';
    echo "中文简介:".$row['Cintroduction'];
    echo'</div>';
    echo '<div class="info">';
    echo "英文简介:".$row['Eintroduction'];
    echo '</div>';
    echo '<div class="info" style="width:10%;  font-size:12px; padding-top:50px; text-align:center; font-weight:bold; font-size:30px;">';
    echo "$".$row['price'];
    echo '</div></div>';
    
}
echo'</span>';
echo'<input  id="1" type="button" value="展开"  onclick="return get(this.id)" style="width:100%;"/>';
echo'<div class="hor" id="c7">理工</div>';
echo'<span id="classification_7" style="display:none;">';
$result=mysqli_query($conn,"SELECT book.ISBN,title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification` WHERE book.ISBN=`book-classification`.ISBN AND `book-classification`.cno=7");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo '<div class="info">';
    echo '<div style="font-weight:bold; font-size:120%;">《'.$row['title'] .'》</div> ';
    echo '<br>';
    echo "作者:".$row['allauthor']. "  &nbsp;&nbsp;&nbsp;译者:".$row['alltranslator'] . "<br>";
    echo "<br>出版社:".$row['publisher']."&nbsp&nbsp&nbsp版本:".$row['edition']."<br><br>分类:".$row['classification']."<br>";
    echo '<br>';
    echo '</div>';
    echo '<div class="info">';
    echo "中文简介:".$row['Cintroduction'];
    echo'</div>';
    echo '<div class="info">';
    echo "英文简介:".$row['Eintroduction'];
    echo '</div>';
    echo '<div class="info" style="width:10%;  font-size:12px; padding-top:50px; text-align:center; font-weight:bold; font-size:30px;">';
    echo "$".$row['price'];
    echo '</div></div>';
    
}
echo'</span>';
echo'<input  id="7" type="button" value="展开"  onclick="return get(this.id)" style="width:100%;"/>';

echo'<div class="hor" id="c2">人文</div>';
echo'<span id="classification_2" style="display:none;">';
$result=mysqli_query($conn,"SELECT book.ISBN,title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification` WHERE book.ISBN=`book-classification`.ISBN AND `book-classification`.cno=2");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo '<div class="info">';
    echo '<div style="font-weight:bold; font-size:120%;">《'.$row['title'] .'》</div> ';
    echo '<br>';
    echo "作者:".$row['allauthor']. "  &nbsp;&nbsp;&nbsp;译者:".$row['alltranslator'] . "<br>";
    echo "<br>出版社:".$row['publisher']."&nbsp&nbsp&nbsp版本:".$row['edition']."<br><br>分类:".$row['classification']."<br>";
    echo '<br>';
    echo '</div>';
    echo '<div class="info">';
    echo "中文简介:".$row['Cintroduction'];
    echo'</div>';
    echo '<div class="info">';
    echo "英文简介:".$row['Eintroduction'];
    echo '</div>';
    echo '<div class="info" style="width:10%;  font-size:12px; padding-top:50px; text-align:center; font-weight:bold; font-size:30px;">';
    echo "$".$row['price'];
    echo '</div></div>';
    
}
echo'</span>';
echo'<input  id="2" type="button" value="展开"  onclick="return get(this.id)" style="width:100%;"/>';

echo'<div class="hor" id="c3">社科</div>';
echo'<span id="classification_3" style="display:none;">';
$result=mysqli_query($conn,"SELECT book.ISBN,title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification` WHERE book.ISBN=`book-classification`.ISBN AND `book-classification`.cno=3");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo '<div class="info">';
    echo '<div style="font-weight:bold; font-size:120%;">《'.$row['title'] .'》</div> ';
    echo '<br>';
    echo "作者:".$row['allauthor']. "  &nbsp;&nbsp;&nbsp;译者:".$row['alltranslator'] . "<br>";
    echo "<br>出版社:".$row['publisher']."&nbsp&nbsp&nbsp版本:".$row['edition']."<br><br>分类:".$row['classification']."<br>";
    echo '<br>';
    echo '</div>';
    echo '<div class="info">';
    echo "中文简介:".$row['Cintroduction'];
    echo'</div>';
    echo '<div class="info">';
    echo "英文简介:".$row['Eintroduction'];
    echo '</div>';
    echo '<div class="info" style="width:10%;  font-size:12px; padding-top:50px; text-align:center; font-weight:bold; font-size:30px;">';
    echo "$".$row['price'];
    echo '</div></div>';
    
}
echo'</span>';
echo'<input  id="3" type="button" value="展开"  onclick="return get(this.id)" style="width:100%;"/>';

echo'<div class="hor" id="c5">经管</div>';
echo'<span id="classification_5" style="display:none;">';
$result=mysqli_query($conn,"SELECT book.ISBN,title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification` WHERE book.ISBN=`book-classification`.ISBN AND `book-classification`.cno=5");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo '<div class="info">';
    echo '<div style="font-weight:bold; font-size:120%;">《'.$row['title'] .'》</div> ';
    echo '<br>';
    echo "作者:".$row['allauthor']. "  &nbsp;&nbsp;&nbsp;译者:".$row['alltranslator'] . "<br>";
    echo "<br>出版社:".$row['publisher']."&nbsp&nbsp&nbsp版本:".$row['edition']."<br><br>分类:".$row['classification']."<br>";
    echo '<br>';
    echo '</div>';
    echo '<div class="info">';
    echo "中文简介:".$row['Cintroduction'];
    echo'</div>';
    echo '<div class="info">';
    echo "英文简介:".$row['Eintroduction'];
    echo '</div>';
    echo '<div class="info" style="width:10%;  font-size:12px; padding-top:50px; text-align:center; font-weight:bold; font-size:30px;">';
    echo "$".$row['price'];
    echo '</div></div>';
    
}
echo'</span>';
echo'<input  id="5" type="button" value="展开"  onclick="return get(this.id)" style="width:100%;"/>';

echo'<div class="hor" id="c6">医学</div>';
echo'<span id="classification_6" style="display:none;">';
$result=mysqli_query($conn,"SELECT book.ISBN,title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification` WHERE book.ISBN=`book-classification`.ISBN AND `book-classification`.cno=6");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo '<div class="info">';
    echo '<div style="font-weight:bold; font-size:120%;">《'.$row['title'] .'》</div> ';
    echo '<br>';
    echo "作者:".$row['allauthor']. "  &nbsp;&nbsp;&nbsp;译者:".$row['alltranslator'] . "<br>";
    echo "<br>出版社:".$row['publisher']."&nbsp&nbsp&nbsp版本:".$row['edition']."<br><br>分类:".$row['classification']."<br>";
    echo '<br>';
    echo '</div>';
    echo '<div class="info">';
    echo "中文简介:".$row['Cintroduction'];
    echo'</div>';
    echo '<div class="info">';
    echo "英文简介:".$row['Eintroduction'];
    echo '</div>';
    echo '<div class="info" style="width:10%;  font-size:12px; padding-top:50px; text-align:center; font-weight:bold; font-size:30px;">';
    echo "$".$row['price'];
    echo '</div></div>';
    
}
echo'</span>';
echo'<input  id="6" type="button" value="展开"  onclick="return get(this.id)" style="width:100%;"/>';

echo'<div class="hor" id="c8">其他</div>';
echo'<span id="classification_8" style="display:none;">';
$result=mysqli_query($conn,"SELECT book.ISBN,title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification` WHERE book.ISBN=`book-classification`.ISBN AND `book-classification`.cno=8");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo '<div class="info">';
    echo '<div style="font-weight:bold; font-size:120%;">《'.$row['title'] .'》</div> ';
    echo '<br>';
    echo "作者:".$row['allauthor']. "  &nbsp;&nbsp;&nbsp;译者:".$row['alltranslator'] . "<br>";
    echo "<br>出版社:".$row['publisher']."&nbsp&nbsp&nbsp版本:".$row['edition']."<br><br>分类:".$row['classification']."<br>";
    echo '<br>';
    echo '</div>';
    echo '<div class="info">';
    echo "中文简介:".$row['Cintroduction'];
    echo'</div>';
    echo '<div class="info">';
    echo "英文简介:".$row['Eintroduction'];
    echo '</div>';
    echo '<div class="info" style="width:10%;  font-size:12px; padding-top:50px; text-align:center; font-weight:bold; font-size:30px;">';
    echo "$".$row['price'];
    echo '</div></div>';
    
}
echo'</span>';
echo'<input  id="8" type="button" value="展开"  onclick="return get(this.id)" style="width:100%;"/>';

mysqli_close($conn);
?>
<span><a class="totop" href=#top> 回到顶部</a></span>


<div style="width:100%;
	 background-position:-15% 5%;
	background-repeat:repeat; background-image:url('bg.jpg'); float:left;">
<div  style="text-align:right; width:35%; float:left;"><p>使用说明</p><br/><a href = "#top" onclick = "document.getElementById('light2').style.display='block';document.getElementById('fade2').style.display='block';">使用流程</a><br/><a href = "#top" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';">会员优惠</a></div>
<div  style="text-align:center; width:30%; float:left;"><p>分类导航</p><br/>&nbsp;<a href=#c4 onclick=" return get(4);">&nbsp;&nbsp;教材</a> &nbsp;&nbsp;&nbsp;    <a href=#c1 onclick=" return get(1);">计算机</a><br/><a href=#c7 onclick=" return get(7);">&nbsp;&nbsp;理工      </a>  &nbsp;&nbsp;&nbsp;   <a href=#c2 onclick=" return get(2);">人文&nbsp;&nbsp;</a><br/><a href=#c3 onclick=" return get(3);">&nbsp;&nbsp;社科     </a>   &nbsp;&nbsp;&nbsp;  <a href=#c5 onclick=" return get(5);">经管&nbsp;&nbsp;</a><br/><a href=#c6 onclick=" return get(6);">&nbsp;&nbsp;医学     </a>&nbsp;&nbsp;&nbsp;<a href=#c8 onclick=" return get(8);">     其他&nbsp;&nbsp;</a></div>
<div  style="text-align:left; width:35%; float:left;"><p>分店导航</p><br/><a href="shop1.php">分店1</a><br/><a href="shop2.php">分店2</a><br/><a href="shop3.php">分店3</a><br/><a href="shop4.php">分店4</a><br/></div>
<div style="hor"></div>
</div>
</body>
</html>
