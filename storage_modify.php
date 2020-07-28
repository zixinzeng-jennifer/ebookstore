<html>
<head>
    <meta charset="UTF-8">
    <title>库存信息的查询和修改</title>
    <style>
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


    </style>
</head>

<body background="bg.jpg">

<!导航栏>
<div class="row" >
    <div class="navitem" style="flex:5%;background-color: #FEFDED">
        <a href="storage.php" >返回库存入口</a></div>

    <div class="navitem" style="flex:50%;background-color: #FEFDED"></div>

    <div class="navitem" style="flex:5%;background-color: #FEFDED">
        <a href="employee.php" >返回店员入口</a></div>
</div><br><br><br>

<form action="storage_modify_check.php" method="post"   style="width: 60%;text-align: right;font-size:20px;">

    <labal>ISBN:</labal><input style="width:300px;height: 30px;" type="text" name="ISBN" placeholder="ISBN"><br>
    <labal>所属分店:</labal><input style="width:300px;height: 30px;" type="text" name="shopno" placeholder="所属分店"><br>
    <labal>库存:</labal><input style="width:300px;height: 30px;" type="text" name="storage" placeholder="库存"><br><br>
    <input  name="submit" style="width:60px;height:30px" type="submit" value="修改">
</form><br><br>


</body>
</html>
