<?php
/**
 * Created by PhpStorm.
 * User: mashilu
 * Date: 2015/9/10
 * Time: 16:44
 */

    $pictures = array('tire' => 'tire.jpg', 'oil' => 'oil.jpg',
        'door' => 'door.jpg', 'steering_wheel' => 'steering_wheel.jpg',
        'thermostat' => 'thermostat.jpg', 'wiper_blade' => 'wiper_blade.jpg');
    //shuffle($pictures);
    //while (list($altname, $imgsrc) = each($pictures)) {
    //    echo $altname.": ".$imgsrc."<br />";
    while ($element = each($pictures)) {
        echo $element['key'].": ".$element['value'];
    }