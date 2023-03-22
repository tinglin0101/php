<?php


session_start();
if($_SESSION["login"]=="yes"){
    echo "student's page";
}
else{
    header("Location:error.php");
}

?>