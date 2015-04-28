<?php
    header('Content-Type: text/html');
    function PrintGreeting($name)
    {
        echo 'Hello, ' . $name;
    }
    echo $_GET['search'];
    echo '<br>';
    PrintGreeting('Sarah');