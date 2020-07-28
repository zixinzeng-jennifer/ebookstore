<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>高级检索</title>


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
	padding:20%;
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
   overflow: auto;
   border: 1px solid #e7e7e7 ;
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

.label{ 
	display:inline-block; 
	float:inherit; 
	width: 50%;  
	text-align: right; }
</style>
<script>
window.onload = function(){
    var a=document.getElementById('home_link');
    if(document.cookie.indexOf("uno=")!=-1)
    {
        a.href="inhomepage.php";
    }
}
</script>
</head>
<body>
<div id="top" class="row" style="background-image:url('bg.jpg');">
	<div class="navitem" style="flex:4%;"><a target="_blank"  href="_blank"><img src="00.png" height=50% width=50%></a></div>
	 <div class="navitem"><a href="homepage.php" id="home_link">首页</a></div>

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

    <div class="navitem"><a href="shop1.php" >分店1</a></div>
	<div class="navitem"><a href="shop2.php" >分店2</a></div>
	<div class="navitem"><a href="shop3.php" >分店3</a></div>
	<div class="navitem"><a href="shop4.php" >分店4</a></div>
	<div class="navitem" style="float:right"><a href="employeelogin.php" >店员入口</a></div>
	<div class="navitem" style="float:right"><a href="managerlogin.php" >店长入口</a></div>
</div>
	
<!高级检索 标题>
<div class="hor" style="background-color: #FEFDED"><strong>高级检索</strong></div>
	
<!搜索框>
<form method="post" action="user-AdvancedSearch.php" style="padding-top: 5px;border:1px solid #e7e7e7;" >
	<center>
	<span style="display: inline-block;width:8%;">书名：</span><input name="title" type="text/css" /><br>
	<span style="display: inline-block;width:8%;">ISBN：</span><input name="ISBN" type="text/css" /><br>
	<span style="display: inline-block;width:8%;">作者：</span><input name="allauthor" type="text/css" /><br>
	<span style="display: inline-block;width:8%;">译者：</span><input name="alltranslator" type="text/css" /><br>
	<span style="display: inline-block;width:8%;">版本：</span><input name="edition" type="text/css" placeholder="请输入阿拉伯数字"/><br>
	<span style="display: inline-block;width:8%;">出版社：</span><input name="publisher" type="text/css" /><br>
	<input name="btn" type="submit"  value="搜索" style="margin-top: 1%;margin-bottom: 0.5%"/>
	</center>
</form>
	
<?php
$servername="localhost";
	  $username="root";
	  $password="";
	  $dbname="book";
	  $conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8"); 
//接受参数
@$title=$_POST["title"];
@$ISBN=$_POST["ISBN"];
@$allauthor=$_POST["allauthor"];
@$alltranslator=$_POST["alltranslator"];
@$publisher=$_POST["publisher"];
@$edition=$_POST["edition"];

//判断空与非空+构造query
if($title=="" and $ISBN=="" and $allauthor=="" and $alltranslator=="" and $publisher=="" and $edition==""){
$query="select *from book";
}else{
$query="select * from book where 1=1 ";
if($title!=""){
	$query.=" and title like '%".$title."%'";
}
if($ISBN!=""){
	$query.=" and ISBN like '%".$ISBN."%'";
}


if($allauthor!=""){
	$query.="and  allauthor like '%".$allauthor."%'";
}
if($alltranslator!=""){
	$query.="and  alltranslator like '%".$alltranslator."%'";
}
if($publisher!=""){
	$query.="and publisher like '%".$publisher."%'";
}
if($edition!=""){
	$query.="and edition like '%".$edition."%'";
}
}
//echo $query;
//执行查询
echo'<span id="user-AS" >';

$result=mysqli_query($conn,$query);

//返回查询数目
$rowcount=mysqli_num_rows($result);
printf("总共返回 %d 条书目",$rowcount);
//输出查询结果
while(@$row=mysqli_fetch_array($result)){

	echo'<div class="book1">';
	echo'<div class="image1">
	<a target="_blank" href="specific_book.php?ISBN='.$row['ISBN'].'"><img src="'.$row['url'].'" height="150"></a></div>';
	
	echo '<div class="info" style="width:17%">';
	echo '<div style="font-weight:bold; font-size:120%;">《'.$row['title'] .'》</div> ';
    echo '<br>';
	echo"ISBN：".$row['ISBN']."<br>";
	echo"作者：".$row['allauthor']."<br>";
	echo "译者:".$row['alltranslator']. "<br>";
	echo '</div>';
	
	echo '<div class="info" style="width:15%">';
	echo "分类:".$row['classification']."<br>";
    echo "出版社:".$row['publisher']."<br>";
	echo "版本:".$row['edition']."<br>";
	echo "建议售价:".$row['price']. "<br>";
	echo'</div>';
	
	echo '<div class="info" style="width:20%">';
	echo'<div style="font-weight:bold; font-size:120%;">中文简介</div> ';
    echo $row['Cintroduction'];
	echo '<br>';
	echo'</div>';
	
	echo '<div class="info" style="width:20%">';
    echo'<div style="font-weight:bold; font-size:120%;">英文简介</div> ';
    echo $row['Eintroduction'];
	echo '<br>';
	
    echo '</div></div>';
	echo'</span>';
}
mysqli_close($conn);
?>
<!底栏>
<div class="row">
  <div class="navitem" style="flex:50%;background-color: #FEFDED">
	<div class="navitem">神奇书店在哪里</div></div>
</div>

</body>
</html>