<html>
<head>

</head>
<body>
<form action="check.php" method="post">
選擇身分:<br>
<input type="radio" name="identity" value="student">學生<br>
<input type="radio" name="identity" value="teacher">教師<br>
<input type="radio" name="identity" value="president">校長<br>
輸入帳號:<input type="text" name="account" requited><br>
輸入密碼:<input type="password" name="pwd" required><br>

<input type="submit">
<input type="reset">
</form>

</body>

</html>
<?php
session_start();
$_SESSION["login"]="no";
?>