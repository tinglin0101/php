<?php
if(isset($_POST["id"])){
    //name&id
    $name=$_POST["name"];
    $id=$_POST["id"];
    echo "姓名:".$name." 學號:".$id."<br/>";
    //gender
    $gender=$_POST["gender"];
    if($gender="male"){
        echo "男性";
    }
    else if($gender="female"){
        echo "女性";
    }
    else{
        echo "政確喔";
    }
    //

    $cant_eat=$_POST["cant_eat"];
    if(count($cant_eat)==0){
        echo "<br/>都吃讚<br/>";
    }
    else{
        echo "<br/>我不吃:";
        foreach($cant_eat as $value){
            echo $value." ";
        }
    }
    
    echo "<br/>";
}
else{
    echo "請重新輸入";
}



?>