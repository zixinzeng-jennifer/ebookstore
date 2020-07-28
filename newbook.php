<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
	.a{text-align: right;
		font-size: 20px;
		width: 75%;

	}
	.button{text-align: center;
		    width:100%;
	}


</style>
<title>新书入库</title>
</head>
	<body background="bg.jpg">

    <?php


    $conn = new MySQLi("localhost","root","","book");
    $conn->query('set names utf8') or die ('query字符集错误');
    if (isset($_GET["ISBN"])) {
        $ISBN=$_GET["ISBN"];
    $sql = "select title,publisher,edition,price,Cintroduction,Eintroduction ,allauthor,alltranslator,classification,url from book where book.ISBN='{$ISBN}'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
		echo'<form action="newbook_check.php" method="post" enctype="multipart/form-data" >
			<hx>新书入库</hx><br><br><br>
			<div class="a">
				书名:<input type="text" name="title" value="'.$row['title'].'" style="width:545px;height:30px;margin-bottom: 6px;"/><br/>
				ISBN:<input type="text" name="ISBN" value="'.$ISBN.'" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
                数量:<input type="text" name="number" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				出版社:<input type="text" name="publisher" value="'.$row['publisher'].'" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				版本:<input type="text" name="edition" value="'.$row['edition'].'" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				价格:<input type="text" name="price" value="'.$row['price'].'" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				<div>
				中文简介：<textarea class="a"name="Cintroduction"style="width:545px;height:30px;margin-bottom:8px;font-size:13px;font-family: Microsoft YaHei ;vertical-align: top">"'.$row['Cintroduction'].'"</textarea><br>
				英文简介：<textarea class="a"name="Eintroduction"style="width:545px;height:30px;margin-bottom:8px;font-size:13px;font-family: Microsoft YaHei ;vertical-align: top">"'.$row['Eintroduction'].'"</textarea><br>
</div>			
				作者:<input type="text" name="allauthor" value="'.$row['allauthor'].'" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				翻译:<input type="text" name="alltranslator" value="'.$row['alltranslator'].'" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				类别:<input type="text" name="classification"  value="'.$row['classification'].'" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				图片：<input type="text" name="photo_url" value="'.$row['url'].'" style="width:545px;height:30px;margin-bottom: 6px"/><br/><br/>
						
			</div>';
    }
    elseif  (isset($_GET["title"])) {
        $title=$_GET["title"];
        echo'<form action="newbook_check.php" method="post" enctype="multipart/form-data" >
			<hx>新书入库</hx><br><br><br>
			<div class="a">
				书名:<input type="text" name="title" value="'.$title.'" style="width:545px;height:30px;margin-bottom: 6px;"/><br/>
				ISBN:<input type="text" name="ISBN"  style="width:545px;height:30px;margin-bottom: 6px"/><br/>
                数量:<input type="text" name="number" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				出版社:<input type="text" name="publisher"  style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				版本:<input type="text" name="edition" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				价格:<input type="text" name="price"  style="width:545px;height:30px;margin-bottom: 6px"/><br/>
                <div class="b">中文简介:<input type="text" name="Cintroduction"  style="width:530px;height:80px;margin-bottom: 6px; "><br/></div>
				<div class="b">英文简介:<input type="text" name="Eintroduction"  style="width:530px;height:80px;margin-bottom: 6px"/><br/></div>
				
				作者:<input type="text" name="allauthor" style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				翻译:<input type="text" name="alltranslator"  style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				类别:<input type="text" name="classification"   style="width:545px;height:30px;margin-bottom: 6px"/><br/>
				图片：<input type="text" name="photo_url"  style="width:545px;height:30px;margin-bottom: 6px"/><br/><br/>
						
			</div>';
    }

			echo'<div class="button">
			<input type="submit" name="submit" value="上传" style="width: 100px">
			</div>
			
		</form>';





    mysqli_close($conn);
    ?>


</body>
</html>


