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
  padding: 10px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-size:25px;
  width:60px;
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
input[type=text]
{
    padding:10px;
    font-size:25px;
    text-align:center;
    width:50px;
    border:1px #8E8E8E solid;
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
function cal()
{
	document.form1.action="calculate.php";
	document.form1.submit();
	//window.location.href="calculate.php";
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
function dec(num)
{
	//alert('调用dec');
	var a=document.getElementById("price"+num);
	var curnum=Number(a.value);
	if(curnum==1)
	{
		alert('图书数目不能少于一本!');
	}
	else{curnum-=1;
	a.value=curnum;
	}
	calculate();
}
function inc(num)
{
	//alert('调用inc');
	var a=document.getElementById("price"+num);
	var curnum=Number(a.value);
	curnum+=1;
	a.value=curnum;
	calculate();
}
function getQueryString(name) {
	  var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	  var r = window.location.search.substr(1).match(reg);
	  if (r != null) return unescape(r[2]);
	  return null;
} 
function calculate()
{
	var b=gettime();
	//alert(b);
	var i=0;
	var total=0;
	var flag=new Array();
	var discount=0;
	var total=0;
	var j,k;
	while(i<b)
	{
		flag[i]=0;
		i+=1;
	}
	i=0;
	while(i<b)
	{
		var a=document.getElementById("book"+i);
		if(a.checked){
			for(j=0;j<3;j++)
			{
				for(k=0;k<b;k++)
				{
					var x=document.getElementById("book"+k);
					if(booklist[k]==cosale[i][j] && x.checked)
					{			
						flag[k]=1;
						flag[i]=1;
					}
				}
			}
		}
		i+=1;
	}
	i=0;
	while(i<b)
	{
		var a=document.getElementById("book"+i);
		if(a.checked){
			if(flag[i]==1)
			{
				var c=(price[i]+pprice[i])/2;
			}
			else{
				var c=price[i];
			}
			var d=document.getElementById("price"+i);
			d=d.value;
			total+=Number(c)*Number(d);
			if(flag[i]==1)
			{
				discount+=pprice[i]*Number(d)/2;
			}
		}
		i+=1;
	}
	//alert(total);
	total=total.toFixed(2);
	discount=discount.toFixed(2);
	ttotal=total-discount;
	ttotal=ttotal.toFixed(2);
	document.getElementById('total').innerHTML=total;
	document.getElementById('discount').innerHTML=discount;
	document.getElementById('truetotal').innerHTML=ttotal;
}
</script>
</head>

<body onchange="calculate()">
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
$sql="SELECT * FROM collection WHERE userno=".$_COOKIE['uno'];
$result=mysqli_query($conn,$sql);
$i=0;
$total=0;
echo'<script> var booklist=new Array();</script>';
echo'<script> var price=new Array();</script>';
echo'<script> var pprice=new Array();</script>';
echo'<script> var cosale=new Array();</script>';
if(mysqli_num_rows($result)==0){echo'<div style="width:100%;height:300px;padding:50px;text-align:left;font-size:25px;">您还没有收藏</div>';}
else{
    //$sql2="SELECT * FROM cosale WHERE userno=".$_COOKIE['uno']." ORDER BY ISBN";
    //$result2=mysqli_query($conn,$sql2);
   // $n=0;
    echo '<div style="width:100%;padding:50px;text-align:left;font-size:25px;">';
    echo' <form name="form1" method="post" action="calculate.php">';
    while($row=mysqli_fetch_array($result))/*单笔订单*/
    {   
        echo '<div style="padding:10px;">';
        $sql2="SELECT * FROM book WHERE ISBN='".$row['ISBN']."'";
        $results=mysqli_query($conn,$sql2);
        $rows=mysqli_fetch_array($results);
        echo '<script> price['.$i.']='.$rows['price'].'</script>';
        echo '<script> pprice['.$i.']='.$rows['pprice'].'</script>';
        echo '<script> booklist['.$i.']='.$rows['ISBN'].'</script>';
        echo '<script> cosale['.$i.']=new Array();</script>';
        $sql3="SELECT * FROM cosale WHERE userno=".$_COOKIE['uno']." AND ISBN='".$row['ISBN']."'";
        $result3=mysqli_query($conn,$sql3);
        $q=mysqli_num_rows($result3);
        //echo $q;3
        $m=0;
        while($m<$q)
        {
            $row3=mysqli_fetch_array($result3);
            //echo $row3['co'];
            echo '<script> cosale['.$i.']['.$m.']='.$row3['co'].'</script>';
            $m+=1;
        }
        echo '<input type="checkbox" id="book'.$i.'" checked="checked" value="'.$rows['ISBN'].'" name="field['.$i.']">';
        echo '<label for "book'.$i.'">&nbsp;图书编号:'.$rows['ISBN'].'&nbsp;&nbsp;&nbsp;标题：'.$rows['title'].'&nbsp;&nbsp;&nbsp;定价：$'.$rows['price'].'&nbsp;&nbsp;&nbsp;数量：</label>';
        echo'<input type="button" value="-" onclick="dec('.$i.')"><input type="text" value="1" id="price'.$i.'" name="num['.$i.']"><input type="button" value="+" onclick="inc('.$i.')"><br>';
	    $i+=1;
	    echo '</div>';
    }
    echo '</form>';
    echo '</div>';
    
    echo '<div style="width:100%; float:right; text-align:right; font-size:25px; padding-right:120px; padding-top:10px; padding-bottom:10px;background-color: lightgreen; color:white;overflow:hidden;">总计：$';
    echo'<span id="total"></span>';
    echo '</div>';
    echo '<div style="width:100%; float:right; text-align:right; font-size:25px; padding-right:120px; padding-top:10px; padding-bottom:10px;background-color: lightgreen; color:white;overflow:hidden;">已优惠：$';
    echo'<span id="discount">0</span>';
    echo '</div>';
    echo '<div style="width:100%; float:right; text-align:right; font-size:25px; padding-right:120px; padding-top:10px; padding-bottom:10px;background-color: lightgreen; color:white;overflow:hidden;">您需支付：$';
    echo'<span id="truetotal"></span>';
    echo '</div>';
    echo '<input style="width:100%;" type="button" value="提交" onclick=cal()>';
    $msectime=$i;
    echo '<script> function gettime(){return '.$msectime.';}</script>';
    echo '<script>calculate();</script>';
}
mysqli_close($conn);
?>

</body>
</html>