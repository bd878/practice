<?php
    function GetParam($name, $default = '')
    {  
        return (isset($_GET[$name]) ? $_GET[$name] : $default);
    }
    $search = GetParam('search');
    $name = GetParam('name', 'Sarah');