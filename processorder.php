<?php
    // create short variable names
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $address = $_POST['address'];
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    echo $DOCUMENT_ROOT;
    $date = date('H:i, jS F Y');
?>

<html>
<head>
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order results</h2>

    <?php
        echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
        echo "<p>Your order is as follows: </p>";

        $totalqty = 0;
        $totalqty = $tireqty + $oilqty + $sparkqty;

        echo "<p>Items ordered: ".$totalqty."</p>";

        if ($totalqty == 0) {
            echo "You didn't order anything on the previous page!<br />";
        }
        else {
            if ($tireqty > 0) {
                echo $tireqty." tires<br />";
            }
            if ($oilqty > 0) {
                echo $oilqty." oil<br />";
            }
            if ($sparkqty > 0) {
                echo $sparkqty." spark plugs<br />";
            }
        }

        $totalmount = 0.00;

        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);

        $totalmount = $tireqty * TIREPRICE
                    + $oilqty * OILPRICE
                    + $sparkqty * SPARKPRICE;

        $totalmount = number_format($totalmount, 2, '.', '');

        echo "<p>Total of order is $".$totalmount."</p>";
        echo "<p>Address to ship to is ".$address."</p>";

        $outputstring = $date."\t".$tireqty." tires\t".$oilqty." oil\t".
                        $sparkqty. " spark plugs\t$".$totalmount."\t".$address."\n";

        //open file for appending
        $fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", 'ab');

        if (!$fp) {
            echo "<p><strong>Your order could not be processed at this time.
                    Please try again later.</strong></p></body></html>";
            exit;
        }

        flock($fp, LOCK_EX);
        fwrite($fp, $outputstring, strlen($outputstring));
        flock($fp, LOCK_UN);
        fclose($fp);

        echo "<p>Order Written.</p>";
    ?>
</body>
</html>

