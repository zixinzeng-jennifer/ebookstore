<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>manager-EmployeePerformance</title>
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
<body>
<!导航栏>
<div class="row" >
  <div class="navitem" style="flex:10%;background-color: #FEFDED">
	<div class="navitem"><a href="localhost/homepage.php" >返回首页</a></div></div>
	<div class="navitem" style="flex:10%;background-color: #FEFDED">
	<div class="navitem"><a href="manager.php" >返回店长入口</a></div></div>
	
  <div class="navitem" style="flex:30%;background-color: #FEFDED"></div>
  <div class="navitem" style="flex:10%;background-color: #FEFDED">
	<div class="navitem"><a href="managerlogin_check.php" >退出</a></div>
	  </form></div>
</div>
<!主体>
<div class="row" style="height: 740px;background-image:url('bg.jpg')">
	<!搜索框>
	
	<div class="navitem" style="height: 8%; width: auto; " >
	<form action="_blank" method="post" style="height: 151px;">
	<input type="text" id="search"  name="manager-sale-src" placeholder="书名、ISBN、日期、店员编号" style="height:30px; width:200px;margin-top: 3%">
		<input type="submit"  style="height:30px; width:30px; background-image: url('https://static.runoob.com/images/mix/searchicon.png'); background-color:white;
background-repeat: no-repeat; padding: 0px 0px 10px 5px;" value="" >
		</form></div>
	<!表格>
  <div style="border: 1px solid #000000; width: 700px; height: 500px; margin-top: 5%; margin-right: 14%; margin-left: 20%; margin-bottom: 10%;background-color:  #FEFDED">
	 <?php
	  $servername="localhost";
	  $username="root";
	  $password="";
	  $dbname="book";
	  $conn=new mysqli($servername,$username,$password,$dbname);
	  if(!$conn){die("Connection failed: ". mysqli_connect_error());}
	  mysqli_query($conn,"SET NAMES utf8");
	  $result=mysqli_query($conn,"select `employee-sale`.`employeeno`,`employee-sale`.`employeename`,sum((`employee-sale`.`number`)*(`employee-sale`.`sale`))AS sumsale from `employee-sale` where `employee-sale`.`shopno`={$_COOKIE['shopno']} group by `employee-sale`.`employeeno`");
	  $rows=array();
	  while($row=mysqli_fetch_assoc($result)){
		  $rows[]=$row;
	  }
	 
	?>  
 <table border="1" width=100% >
	 <thead>
		<caption style="height:40px;line-height: 40px;color:#000000" ><strong>查看店员信息</strong></caption>
		<tr>
		<th style="height: 30px">店员编号</th>
		<th style="height: 30px">店员姓名</th>
		<th style="height: 30px">业绩/元</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($rows as $key=>$v){?>
		<tr>
		<td><center><?php echo $v['employeeno'];?></center></td>
		<td><center><?php echo $v['employeename'];?></center></td>
		<td><center><?php echo $v['sumsale'];?></center></td>
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
