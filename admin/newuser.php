<?php
require("../config.php"); 
if(!session_id()) session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>管理員介面 - <?php echo $config["sitename"];?></title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<style>body{ background-color: #F8F8F8; }</style>
</head>
<?php
if($_SESSION["alogin"]){?>
<body>
<div class="container">
  <h1 class="text-center"><?php echo $config["sitetitle"]; ?>管理介面</h1>
<ul class="nav nav-tabs">
  <li><a href="index.php">管理介面首頁</a></li>
  <li class="active"><a href="newuser.php">新增使用者</a></li>
  <li><a href="../index.php">回到首頁</a></li>
  <li><a href="login.php">登出</a></li>
</ul>
<?php 
if ($_GET["s"]=="1") {
    echo '<div class="alert alert-success">新增完成</div>';
}
$err=$_GET["err"];
if($err=="0"){
  echo '<div class="alert alert-danger">不能有任何欄位是空白的</div>';
}
if($err=="2"){
  echo '<div class="alert alert-danger">已經有重複的帳號</div>';
}
?>
<p style="font-size:30px;">新增使用者</p>
<div class="row" style="margin:0 auto;"> <div class="col-md-6">
<form class="form-horizontal" action="newb.php" method="post">
  <div class="form-group">
    <label class="control-label" for="username">帳號</label>
    <div class="controls">
      <input type="text" id="username" class="form-control" placeholder="Username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label" for="password">密碼</label>
    <div class="controls">
      <input type="text" id="password" class="form-control" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
      <input type="text" id="email" class="form-control" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <button type="submit" class="btn">新增使用者</button>
    </div>
  </div>
</form></div></div>
</br>
</div>
<p class="text-center text-info">Proudly Powered by <a href="http://ad.allenchou.cc/">Allen Disk</a></p>
</body>
</html>
<?php
}else{
header("location:login.php");
}
?>