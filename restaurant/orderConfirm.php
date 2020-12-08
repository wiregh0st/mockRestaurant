<?php session_start();
?>
<!DOCTYPE HTML>
<?php require("hmeta.php"); ?>
<?php 
require("foodDict.php");
echo "You ordered: <br>";
if(isset($_POST))
{
    $outputOrder = FALSE;
    foreach ($_POST as $item => $value)
    {
        if($value > 0)
        {
            $outputOrder = TRUE;
            break;
        }
    }
    if($outputOrder == TRUE)
    {
        foreach ($_POST as $item => $value)
        {
            if($value > 0)
            {
                $_SESSION[$item] = $value;
                echo $foodNames[$item] . " x" . $value . "<br>";
            }
        }
    }
    else if($outputOrder == FALSE) 
    {
        header('Location: restaurantDisplay.php?Order=0');
    }
}
echo "</br>If this is correct, press Confirm. Otherwise, press Go Back to return to the previous page.</br>";
?>
<form id="confirm" action="startOrder.php">
    <button form="confirm">Confirm</button>
    <button form="goBack">Go Back</button>
</form>
<form id="goBack" action="restaurantDisplay.php">
</form>