<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>manager-sale</title>
<style>

<!定义类>
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
	flex-wrap:wrap;
	border: 1px solid #e7e7e7;
	}
.main{
	flex:50%;
	border: 50px solid #FFFFFF ;
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

</style>
</head>
	
<!主体>
<body>
	
<!导航栏>	
<div id="top" class="row" style="background-color:#FEFDED ;">
	<div class="navitem" style="flex:4%;"><a target="_blank"  href="_blank"><img src="00.png" height=50% width=50%></a></div>
	<div class="navitem" ><a  href="homepage.php" >首页</a></div>
	
  

  <div class="navitem" ><a href="manager.php" >返回店长入口</a></div>
	<div class="navitem"></div>
	<div class="navitem"></div>
	<div class="navitem"></div> 
	<div class="navitem" style="color: #BDB9B9"><a href="managerlogin.php" >退出</a></div>
</div>
<!主要部分>

<div class="row" style="height: 700px;background-image:url('bg.jpg')";>

<!搜索框>
	<div class="navitem" >
	<form action="_blank" method="post" style="height:1px;">
	<input type="text" id="search"  name="manager-sale-src" placeholder="书名、ISBN、日期、店员编号" style="height:30px; width:200px;">
		<input type="submit"  style="height:30px; width:30px;vertical-align: middle; background-image: url('https://static.runoob.com/images/mix/searchicon.png'); background-color:white;
background-repeat: no-repeat; padding: 0px 0px 10px 5px;" value="" >
		</form></div>

<!表格>
<div style="border: 1px solid #000000; width: 700px; height: 500px; margin-top: 5%; margin-right: 14%; margin-left: 20%; margin-bottom: 10%; background-color: #FEFDED">
	 <?php
	  $servername="localhost";
	  $username="root";
	  $password="";
	  $dbname="book";
	  $conn=new mysqli($servername,$username,$password,$dbname);
	  if(!$conn){die("Connection failed: ". mysqli_connect_error());}
	  mysqli_query($conn,"SET NAMES utf8");
	  $result=mysqli_query($conn,"select * from `store-sale` where `shopno`={$_COOKIE['shopno']}");
	  $rows=array();
	  while($row=mysqli_fetch_assoc($result)){
		  $rows[]=$row;
	  }
	 
	?>  
 <table border="1" width=700px >
	 <thead>
		<caption style="height: 40px; line-height: 40px; color: #000000; background-color: #F6F7B4" ><strong>销售情况</strong></caption>
		<tr>
		<th style="height: 30px;width: 20%">书名</th>
		<th style="height: 30px">ISBN</th>
		<th style="height: 30px;width: 8%">数量</th>
		<th style="height: 30px;width: 10%">售价</th>
		<th style="height: 30px">销售日期</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($rows as $key=>$v){?>
		<tr>
		<td><?php echo $v['title'];?></td>
		<td><?php echo $v['ISBN'];?></td>
		<td><?php echo $v['number'];?></td>
		<td><?php echo $v['sale'];?></td>
		<td><?php echo $v['orderdate'];?></td>
		</tr>
		<?php
		};?>
	</tbody>
</table>
  </div>
</div>	

<!底栏>
<div class="row">
  <div class="navitem" style="flex:50%;background-color: #FEFDED">
	<div class="navitem">神奇书店在哪里</div></div>

</div>
</body>
</html>
