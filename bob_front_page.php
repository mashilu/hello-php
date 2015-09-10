<?php
    $pictures = array('tire' => 'tire.jpg', 'oil' => 'oil.jpg',
                      'door' => 'door.jpg', 'steering_wheel' => 'steering_wheel.jpg',
                      'thermostat' => 'thermostat.jpg', 'wiper_blade' => 'wiper_blade.jpg');
    shuffle($pictures);
?>

<html>
<head>
    <title>Bob's Auto Parts</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <div align="center">
        <table width = '100%'>
            <tr>
                <?php
                    reset($pictures);
                    for ($i = 0; $i < 3; $i++) {
                        list($altname, $imgsrc) = each($pictures);
                        echo "<td align=\"center\" ><img src=\"".$imgsrc."\""."alt=\"".$altname."\" /></td>";
                    }
                ?>
            </>
        </table>
    </div>
</body>
</html>
