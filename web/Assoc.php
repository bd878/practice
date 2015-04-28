<?php                                         
    $person = array('name' => 'Sarah', 'age' => 322);
    print_r($person);
    echo ' ';
    echo $person['name'];
    foreach($person as $key => $value)
    {
        echo $key . ' ' . $value;
    }
    