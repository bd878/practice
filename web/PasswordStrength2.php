<?php
    require('C:\\WebServers\\home\\localhost\\www\\functions\\CalcStrength.inc.php');
    $password = (isset($_GET['password'])) ? $_GET['password'] : '';
    $password = CalcStrength($password);
    echo $password;

    