<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>shop2</title>
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
.row{
	display:flex;
	flex:100%;
	flex-wrap:wrap;
	border: 1px solid #e7e7e7;
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
.right{
	flex:25%;
	text-align:left;
	padding: 5px;
	border: 1px solid #e7e7e7;
	}
.rightnav
{
	list-style-type: none;
    margin: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    height:100%;
	}
.main{
	flex:50%;
	border: 1px solid #e7e7e7;
	}
.hor{
		text-align:center;
		padding:20px;
		border: 1px solid #e7e7e7;
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
	background-color:white;
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
<script language="JavaScript">

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
<div id="top" class="row" style="background-image:url('bg.jpg');">
	<div class="navitem" style="flex:4%;"><a target="_blank"  href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="00.png" height=50% width=50%></a></div>
	<div class="navitem"><a href="homepage.php" >首页</a></div>
	
  <div class="navitem" >
	<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">关于会员</a></div>
<span style="white-space: pre-wrap"><div id="light" class="white_content">
<span style="float: right"><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none' "><img src="close.png" height=50% width=50%></a></span>
<center><strong>关于会员</strong></center>
<strong>如何成为会员？</strong>
在本店注册用户即可成为会员。
注：注册功能在首页登录区
<strong>会员特权</strong>
1.享受9折优惠；
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

    <div class="navitem" ><a href="shop1.php" >分店1</a></div>
	<div class="navitem"><a  class="active" href="shop2.php" >分店2</a></div>
	<div class="navitem"><a href="shop3.php" >分店3</a></div>
	<div class="navitem"><a href="shop4.php" >分店4</a></div>
	<div class="navitem" style="float:right"><a href="employeelogin.php" >店员入口</a></div>
	<div class="navitem" style="float:right"><a href="managerlogin.php" >店长入口</a></div>
</div>
<div class="hor" style="background-color: #FEFDED"><strong>冰窖口胡同店(分店2)</strong></div>
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
echo  ' <div style="height:5%"><form name="form6">
				<center><font color="#7B7777">店内环境</font></center></form> </div>
	<img src="shop2.jpg" height=auto width=100%></a>
	</div>
	<div class="right" style="background-color: #FEFDED">
	 
		<div class="right" style="height:40%;"><font color="#F40E12"><strong>本月活动：</strong><br>
		<center>学生特惠月</center>
		<strong>活动细则：</strong><br>
		&#12288;&#12288;2019.12.1~2019.12.31期间在本店购买教材类书籍，单本30元以上打八五折，50元以上打八折</font>
		</div>
		<div class="right" style="height:54%">
		<strong>本店特色：</strong><br>
		&#12288;&#12288;冰窖口胡同店是“神奇书店”分店中规模最小确实最受年轻人欢迎的书店，居家的装修风格造就轻松的阅读与选书氛围。本店有最齐全的教材类书籍，是学生最常光顾的分店。<br>
		<strong>地址：</strong><br>北京市西城区冰窖口胡同1-11号<br>
		<strong>联系电话：</strong>66764332</div>
	

		</div>
	</div>
</div>';
/*分店2本月活动*/
echo'<div class="hor" style="align-content:center;width:100%;height:auto">本月活动</div>
<div class="row">';
$result=mysqli_query($conn,"SELECT title, book.ISBN,publisher, price, edition, allauthor, alltranslator,url FROM storage,book where storage.ISBN=book.ISBN and shopno='2' and `book`.classification like '%教材%' GROUP BY book.ISBN ");
$i=0;
while($i<4){
    $row=mysqli_fetch_array($result);
	if ($row['price']>30 and $row['price']<=50){
		$promotion=($row['price']*0.85);
	}else{
		if($row['price']>50){
			$promotion=($row['price']*0.8);
		}else{
			$promotion=$row['price'];
		}
	}
    echo'<div class="book" ><div class="image"><a target="_blank" href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
    echo "《".$row['title']."》 "."<br>";
	echo'<font color="#7B7777">';
	echo "原价:"."$".$row['price']."<br>";
	echo'</font>';
	echo'<font color="#F6191D">';
	echo"现价："."$".$promotion."<br>";
	echo'</font>';
    if(strlen($row['alltranslator']==0))
    {echo "作者:".$row['allauthor']."<br>";}
    else{ echo "作者:".$row['allauthor']. "  译者:".$row['alltranslator'] . "<br>";}
    echo "出版社:".$row['publisher']." "."版本:".$row['edition']."<br>";
    echo '</div>';
    $i+=1;
}
echo'</div>';


/*分店2热销书*/
$result=mysqli_query($conn,"SELECT title,book.ISBN,publisher, price, classification, allauthor, alltranslator,url FROM book, transaction,storage WHERE (book.ISBN=transaction.ISBN and book.ISBN=storage.ISBN and storage.shopno='2') GROUP BY book.ISBN ORDER BY SUM(number)DESC");
$i=0;
echo'<div class="hor" style="align-content:center;width:100%;height:auto">本店热销</div>
<div class="row" >';
while($i<4){
    $row=mysqli_fetch_array($result);
    echo'<div class="book"  > <div class="image" ><a target="_blank" href="_blank"><img src="'.$row['url'].'" height="150"></a></div>';
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
    echo'<div class="book" ><div class="image"><a target="_blank" href="_blank"><img src="'.$row['url'].'" height="150"></a></div>';
    echo "《".$row['title']."》 "."$".$row['price']."<br>";
    if(strlen($row['alltranslator']==0))
    {echo "作者:".$row['allauthor']."<br>";}
    else{ echo "作者:".$row['allauthor']. "  译者:".$row['alltranslator'] . "<br>";}
    echo "出版社:".$row['publisher']." "."分类:".$row['classification']."<br>";
    echo '</div>';
    $i+=1;
}
echo'</div>';
/*分店2本周折扣*/


/*分店2分类浏览*/
/*教材*/
echo'<div class="hor" id="c4">教材</div>';
echo'<span id="classification_4" style="display:none;">';
$result=mysqli_query($conn,"SELECT title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification`,`storage` WHERE book.ISBN=`book-classification`.ISBN AND book.ISBN=`storage`.ISBN AND `storage`.shopno=2 AND `book-classification`.cno=4");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a target="_blank" href="_blank"><img src="'.$row['url'].'" height="150"></a></div>';
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

/*计算机*/
echo'<div class="hor" id="c1">计算机</div>';
echo'<span id="classification_1" style="display:none;">';
$result=mysqli_query($conn,"SELECT title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification`,`storage` WHERE book.ISBN=`book-classification`.ISBN AND book.ISBN=`storage`.ISBN AND `storage`.shopno=2 AND `book-classification`.cno=1");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a target="_blank" href="_blank"><img src="'.$row['url'].'" height="150"></a></div>';
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

/*理工*/	
echo'<div class="hor" id="c7">理工</div>';
echo'<span id="classification_7" style="display:none;">';
$result=mysqli_query($conn,"SELECT title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification`,`storage` WHERE book.ISBN=`book-classification`.ISBN AND book.ISBN=`storage`.ISBN AND `storage`.shopno=2 AND `book-classification`.cno=7");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a target="_blank" href="_blank"><img src="'.$row['url'].'" height="150"></a></div>';
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

/*人文*/
echo'<div class="hor" id="c2">人文</div>';
echo'<span id="classification_2" style="display:none;">';
$result=mysqli_query($conn,"SELECT title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification`,`storage` WHERE book.ISBN=`book-classification`.ISBN AND book.ISBN=`storage`.ISBN AND `storage`.shopno=2 AND `book-classification`.cno=2");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a target="_blank" href="_blank"><img src="'.$row['url'].'" height="150"></a></div>';
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

/*社科*/
echo'<div class="hor" id="c3">社科</div>';
echo'<span id="classification_3" style="display:none;">';
$result=mysqli_query($conn,"SELECT title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification`,`storage` WHERE book.ISBN=`book-classification`.ISBN AND book.ISBN=`storage`.ISBN AND `storage`.shopno=2 AND `book-classification`.cno=3");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a target="_blank" href="_blank"><img src="'.$row['url'].'" height="150"></a></div>';
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

/*经管*/
echo'<div class="hor" id="c5">经管</div>';
echo'<span id="classification_5" style="display:none;">';
$result=mysqli_query($conn,"SELECT title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification`,`storage` WHERE book.ISBN=`book-classification`.ISBN AND book.ISBN=`storage`.ISBN AND `storage`.shopno=2 AND `book-classification`.cno=5");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a target="_blank" href="_blank"><img src="'.$row['url'].'" height="150"></a></div>';
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

/*医学*/
echo'<div class="hor" id="c6">医学</div>';
echo'<span id="classification_6" style="display:none;">';
$result=mysqli_query($conn,"SELECT title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification`,`storage` WHERE book.ISBN=`book-classification`.ISBN AND book.ISBN=`storage`.ISBN AND `storage`.shopno=2 AND `book-classification`.cno=6");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a target="_blank" href="_blank"><img src="'.$row['url'].'" height="150"></a></div>';
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

/*其他*/
echo'<div class="hor" id="c8">其他</div>';
echo'<span id="classification_8" style="display:none;">';
$result=mysqli_query($conn,"SELECT title, publisher, price, edition,classification, allauthor, alltranslator,url,Cintroduction,Eintroduction FROM book, `book-classification`,`storage` WHERE book.ISBN=`book-classification`.ISBN AND book.ISBN=`storage`.ISBN AND `storage`.shopno=2 AND `book-classification`.cno=8");
while($row=mysqli_fetch_array($result))
{
    echo'<div class="book1">';
    echo'<div class="image1"><a target="_blank" href="_blank"><img src="'.$row['url'].'" height="150"></a></div>';
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
	</div>
<div class="row">
  <div class="navitem" style="flex:50%;background-image:url('bg.jpg');">
	<div class="navitem">神奇书店在哪里 分店2</div></div>

</div>
</body>
</html>
