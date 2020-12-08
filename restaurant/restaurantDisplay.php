<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mason's Slice of Pi Online">
    <meta name="keywords" content="Restaurant, Online ordering">
    <meta name="author" content="Mason Miller">
    <style>
        .pageTitle {
            text-align: center;
        }

        .menuEntries {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            text-align: center;
        }

        .menuEntries input {
            float: right;
        }

        .tab {
            padding-left: 20px;
        }

        img {
            max-width: 25%;
            height: auto;
            padding-top: 5px;
        }
    </style>
    <title>Mason's Slice of Pi</title>
</head>

<!--
    have to come up with some item names...
    programmable pizza - string cheese, partitioned pepperoni, malware mushrooms, algorithm anchovies, header ham
    integer icecream - void vanilla, char chocolate
    Root beer float
    comment calzone - partitioned pepperoni,
    breadstick bytes
    frozenset froyo
    signed spaghetti
    return ravioli
    java
    more drinks
 -->

<body>

<?php

$customerOrderValues = [
    "progPizzaOrd" => 0,
    "commCalOrd" => 0,
    "breadByteOrd" => 0,
    "signSpagOrd" => 0,
    "retRavOrd" => 0,
    "javaOrd" => 0,
    "frozFroyOrd" => 0,
    "RBFOrd" => 0,
    "intIceOrd" => 0,
];

    foreach($_SESSION as $key => $value)
    {
        if(in_array($key, $customerOrderValues))
        {
            $customerOrderValues[$key] = $customerOrderValues[$key] + $value;
        }
    }
?>

    <h1 class="pageTitle">Mason's Slice of Pi</h1>

    <!-- display items here-->
    <form action="orderConfirm.php" method="post">
        <div class="menuEntries">
            <p>Entrees<br><br>
                Programmable Pizza<span class="tab"><input type="number" name=progPizzaOrd
                        value=<?php echo $customerOrderValues['progPizzaOrd'];?> min="0" max="10"><br><img
                        src="imgs/pizza.gif" alt="spinning pizza"><br>
                Comment Calzone<span class="tab"><input type="number" name=commCalOrd
                        value=<?php echo $customerOrderValues['commCalOrd'];?> min="0" max="10"><br><img
                        src="imgs/calzone.gif" alt="fresh calzone"><br>
                Breadstick Bytes<span class="tab"><input type="number" name=breadByteOrd
                        value=<?php echo $customerOrderValues['breadByteOrd'];?> min="0" max="10"><br><img
                        src="imgs/breadstick.gif" alt="breadstick_bytes"><br>
                Signed Spaghetti<span class="tab"><input type="number" name=signSpagOrd
                        value=<?php echo $customerOrderValues['signSpagOrd'];?> min="0" max="10"><br><img
                        src="imgs/spaghetti.gif" alt="signed_spaghetti"><br>
                Return Ravioli<span class="tab"><input type="number" name=retRavOrd
                        value=<?php echo $customerOrderValues['retRavOrd'];?> min="0" max="10"><br><img
                        src="imgs/ravioli.gif" alt="mm_ravioli"><br>
            </p>
            <p>Drinks<br><br>
                Java<span class="tab"><input type="number" name=javaOrd
                        value=<?php echo $customerOrderValues['javaOrd'];?> min="0" max="10"><br><img
                        src="imgs/coffee.gif" alt="cupped coffee">
            </p>
            <p>Desserts<br><br>
                Frozenset Froyo<span class="tab"><input type="number" name=frozFroyOrd
                        value=<?php echo $customerOrderValues['frozFroyOrd'];?> min="0" max="10"><br><img
                        src="imgs/froyo.gif" alt="froyo"><br>Root Beer Float<input type="number"
                        name=RBFOrd value=<?php echo $customerOrderValues['RBFOrd'];?> min="0" max="10"><br><img
                        src="imgs/RBF.gif" alt="RBF"><br>Integer Icrecream<input type="number"
                        value=<?php echo $customerOrderValues['intIceOrd'];?> name=intIceOrd min="0" max="10"><br><img
                        src="imgs/iceCream.gif" alt="iscream">
            </p>
        </div>
        </div>
        <input type="submit" value="Begin Order">
        <?php if(isset($_GET['Order']))
                {
                    echo "You have to order at least 1 item to continue.";
                }
        ?>
    </form>
</body>

</html>