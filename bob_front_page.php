<?php
    $pictures = array('tire' => 'img/a.png', 'oil' => 'img/b.png',
                      'door' => 'img/c.png', 'steering_wheel' => 'img/d.png',
                      'thermostat' => 'img/e.png', 'wiper_blade' => 'img/f.png');
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
                        echo "<td align=\"center\" width=\"30%\"><img src=\"".$imgsrc."\""."alt=\"".$altname."\" width=\"30%\"/></td>";
                    }
                ?>
            </>
        </table>
    </div>
</body>
</html>
