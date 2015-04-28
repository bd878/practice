<?php
    $names = array();
    $names[] = 'Sarah';
    array_push($names, 'Paul');
    echo count($names);
    print_r($names);
    if (isset($names[1]) && ($names[1] == 'Paul'))
    {
        $names[1] = 'Paul Rever';
    }
    echo ' ';
    print_r($names);