<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>search</title>
<style>
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
		width:100%;
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
#history{
    position:fixed;
}
select{
    
    padding:5px;
    border:2px solid #4CAF50;
}
</style>
<script>
window.onload = function(){
	document.getElementById('search').value=getQueryString('search');
	var shopno=getQueryString('bookshop');
	//alert(shopno);
	var price=getQueryString('bookprice');
	//alert(price);
	//alert(price);
	var a1=document.getElementById('bookshop');
	var o1=a1.getElementsByTagName("option");
	var a2=document.getElementById('bookprice');
	var o2=a2.getElementsByTagName("option");
	switch (shopno)
	{
	case "1":o1[1].selected=true;break;
	case "2":o1[2].selected=true;break;
	case "3":o1[3].selected=true;break;
	case "4":o1[4].selected=true;break;
	default:o1[0].selected=true;break;
	}
	switch(price)
	{
	case "20": o2[1].selected=true;break;
	case "20-30":o2[2].selected=true;break;
	case "30-50":o2[3].selected=true;break;
	case "50":o2[4].selected=true;break;
	default:o2[0].selected=true;break;
	}
	    var a=document.getElementById('home_link');
	    if(document.cookie.indexOf("uno=")!=-1)
	    {
	        a.href="inhomepage.php";
	    }
	

}
function getQueryString(name) {
	  var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	  var r = window.location.search.substr(1).match(reg);
	  if (r != null) return unescape(r[2]);
	  return null;
	} 
function searchpost()
{
	//alert('调用了！');
	var form6=document.form6;
	var s=document.getElementById('search');
	s=s.value;
	//alert(s);
	var t=getQueryString('type');
	//alert(t);
	var shopi=document.getElementById('bookshop')
	var selectshop=shopi.selectedIndex;
	var shop=shopi.options[selectshop].value;
	//alert(shop);
	var pricei=document.getElementById('bookprice').selectedIndex;
	var price=document.getElementById('bookprice').options[pricei].value;
	//alert(price);
	var url="search.php?type="+t+"&bookprice="+price+"&bookshop="+shop+"&search="+s;
	form6.action=url;
	form6.method="post";
	form6.submit();
	
	
}


</script>
</head>
<body>
<div id="top" class="row" style="background-image:url('bg.jpg');">
	<div class="navitem" style="flex:4%;"><a target="_blank"  href="_blank"><img src="00.png" height=50% width=50%></a></div>
	<div class="navitem" ><a  href="homepage.php" id="home_link">首页</a></div>
	
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
<div style="padding-left:50px; width:100%; display:block;"><form name="form6" method="post" style="background-image:url('bg.jpg');">
				<input id="search" type="text" name="src"  placeholder="输入书名、作者、译者、简介..." > <input type="button"  id="searchicon" value="搜索" onclick="searchpost()">
				<a class="comsearch" href="user-AdvancedSearch">高级检索</a></form> </div>
	
	<br/>
<div style="width:100%;text-align:center;padding:5px;display:block;float:left;background-color:#4CAF50;color:white;"><span style="font-weight:bold;">筛选搜索结果:&nbsp;&nbsp;&nbsp;&nbsp;</span>价格:<select id="bookprice" onchange="searchpost()"><option value="all" >全部</option><option value="20" >20元以下</option><option value="20-30" >20-30元</option><option value="30-50" >30-50元</option><option value="50" >50元以上</option></select>&nbsp;&nbsp;&nbsp;&nbsp;分店：<select id="bookshop" onchange="searchpost()"><option  value="all" >全部</option><option value="1" >分店1</option><option value="2" >分店2</option><option value="3" >分店3</option><option value="4">分店4</option></select></div>
<?php 	
require 'C:\wamp64\www\pscws4.class.php';
$servername="localhost";
$username="root";
$password="";
$dbname="book";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("Connection failed: ". mysqli_connect_error());}
mysqli_query($conn,"SET NAMES utf8");
if($_GET['type']==2)
{$sql="INSERT INTO uhistory (userno, search) VALUES ('".$_COOKIE['uno']."','".$_POST['src']."')";
//echo $sql;	
mysqli_query($conn,$sql);}
$sql="UPDATE search SET result=0";
mysqli_query($conn,$sql);
$pscws = new PSCWS4('utf8');
$pscws->set_dict('C:\Program Files\scws\etc\dict.utf8.xdb');
$pscws->set_rule('C:\Program Files\scws\etc\rules.utf8.ini');
$pscws->set_ignore(true);
$pscws->send_text($_POST['src']);

while ($some = $pscws->get_result())
{
    
    switch($_GET['bookshop'])
    {
        case "1":$a=" AND storage.shopno='1'";break;
        case "2":$a=" AND storage.shopno='2'";break;
        case "3":$a=" AND storage.shopno='3'";break;
        case "4":$a=" AND storage.shopno='4'";break;
        default:$a="";break;
    }
    switch($_GET['bookprice'])
    {
        case "20": $b=" AND book.price<20";break;
        case "20-30":$b=" AND (book.price>=20 AND book.price<30)";break;
        case "30-50":$b=" AND (book.price>=30 AND book.price<50)";break;
        case "50": $b=" AND book.price>=50";break;
        default:$b="";break;
    }
    
    foreach ($some as $word)
    {
        
        $sql="SELECT book.ISBN,findex.tfidf,book.price,storage.storage,storage.shopno FROM findex,storage,book WHERE findex.word='".$word['word']."' AND findex.ISBN=book.ISBN AND book.ISBN=storage.ISBN AND storage.storage>0".$a.$b;
        //echo $sql;
        //echo $a;
        //echo $b;
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result))
        {
            $ISBN=$row['ISBN'];
            $sql2="SELECT result FROM search WHERE ISBN='".$ISBN."'";
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($result2);
            $num=$row2['result']+$row['tfidf'];
            //echo $row['tfidf'];
            //echo '<br>';
            //echo $ISBN;
            //echo '<br>';
            //echo $num;
            $sql2="UPDATE search SET result=".$num." WHERE ISBN='".$ISBN."'";
            //echo $sql2;
            mysqli_query($conn,$sql2);
        }
        //print('查询中');
    }
}

$sql="SELECT * FROM search WHERE result>0 ORDER BY result DESC";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
    echo'<div class="book1">很抱歉，没有符合要求的书籍。</div>';
}

else{
while($row2=mysqli_fetch_array($result))
{
    $sql2="SELECT * FROM book WHERE ISBN='".$row2['ISBN']."'";
    $result2=mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_array($result2)){
    echo'<div class="book1" id="book".$i>';
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
}
}
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