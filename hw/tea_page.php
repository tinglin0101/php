<?php


session_start();
if($_SESSION["login"]=="yes"){
    echo "teacher's page";
}
else{
    header("Location:error.php");
}

?>