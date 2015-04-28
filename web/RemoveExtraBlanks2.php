<?php
    $spaces = trim(preg_replace('/\s{2,}/', ' ', $_GET['search'])); //trim - удаляет пробелы из начала и конца строки 
                                                                    //preg_replace - заменяет в строке 3 параметра данные 2 параметра на 1 параметр
    echo $spaces;