<?php
session_start();
$stu_account="a";
$stu_pwd="a";
$tea_account="b";
$tea_pwd="b";
$pre_account="c";
$pre_pwd="c";

$idntity=$_POST["identity"];
$account=$_POST["account"];
$pwd=$_POST["pwd"];

if($idntity=="student"){
    if($stu_account==$account && $stu_pwd==$pwd){
        $_SESSION["login"]="yes";
        header("location:student.php");
    }
    else{
        echo "學生帳號或密碼錯誤";
        
    }
}
else if($idntity=="teacher"){
    if($tea_account==$account && $tea_pwd==$pwd){
        $_SESSION["login"]="yes";
        header("location:teacher.php");
    }
    else{
        echo "教師帳號或密碼錯誤";
    }
}
else if($idntity=="president"){
    if($pre_account==$account && $pre_pwd==$pwd){
        $_SESSION["login"]="yes";
        header("location:president.php");
    }
    else{
        echo "校長帳號或密碼錯誤";
    }
}
else{
    echo "發生錯誤 3秒裝後將會返回頁面";
    header("refresh:3;url=index1.php");
}
?>