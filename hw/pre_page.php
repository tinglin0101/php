<?php



session_start();
if($_SESSION["login"]=="yes"){
    echo "president's page";
}
else{
    header("Location:error.php");
}

?>
