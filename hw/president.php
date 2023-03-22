<?php ob_start();?>
<?php
session_start();
if($_SESSION["login"]=="yes"){
}
else{
    header("Location:error.php");
}
?>
<html>
<head>

<head>
<body>
<h3>登入成功</h3>
<a href="pre_page.php">校長頁面</a>
<a href="tea_page.php">教師頁面</a><br>
<a href="logout.php">logout</a>
</body>
</html>