<?php require("hmeta.php"); ?>
<?php
header("refresh:5;url=restaurantDisplay.php");
session_start();
session_unset();
session_destroy();

if(isset($_POST))
{
    echo "Thanks for placing an order. It's on its way! You should be redirected in 5 seconds...";
}
?>