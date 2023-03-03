<html>
<head>
<title>大家來系考</title>
<meta charset="utf-8">
</head>    
<body>
    <p><t1>系考</t1>
    時間:3/20 18:00<br>
    地點:高大烤肉區<br>
    價格:一人300元<br><p>
    <form action="bbq_get.php" method="post">
        
        <t1>參加表單</t1><br>
        名字:<input type="text" name="name" placeholder="輸入名字"  required><br/>
        學號:<input type="text" name="id" placeholder="輸入學號" required><br/>
        
        性別:<br>
        <input type="radio" name="gender" value="male">男<br/>
        <input type="radio" name="gender" value="female">女<br/>
        <input type="radio" name="gender" value="other">其他<br/>
        
        過敏原/不吃:<br>
        <select name="cant_eat[]" multiple>
        <option value="pork">豬肉
        <option value="fish">魚肉
        <option value="beef">牛肉
        </select>
        
        <input type="submit">
        <input type="reset"><br/>
    
    </form>
        
</body>
</html>