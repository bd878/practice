<?php
    $password_string = (isset($_GET['password'])) ? $_GET['password'] : ' ';
    $password = str_split($password_string);
    $total = 0;
    $length = 0;
    $numbers = 0;
    $upper = 0;
    $lower = 0;    
    if (preg_match('/[а-€\.\!\@\#\$\%\^\&\*\(\)\-\_\=\+\[\]\{\}\<\>\,\/]/i', $password_string))
    {
         echo 'invalid password: only upper- and lower latin letters and numbers!';
    } else
    {
         $length = strlen($password_string);
         $total = 4 * $length;
         foreach($password as $symbol)
         {
              if (is_numeric($symbol))
              {
                   $numbers = $numbers + 1;
              } else if(is_string($symbol))
              {
                   if (ctype_upper($symbol))
                   {
                        $upper = $upper + 1;
                   } else
                   {
                        $lower = $lower + 1;
                   }
              }
         }
    }
    
    $total = $total + (($length - $upper) * 2);
    $total = $total + (($length - $lower) * 2);
    $total = $total + ($numbers * 4);
    if ($numbers == 0)
    {
         $total = $total - $length;
    } else if (($lower == 0) and ($upper = 0))  //в принципе, все условие можно впихнуть в один блок, но так наглд€нее - если символов 0 и букв 0
    {
         $total = $total - $length;
    }
    //дл€ подсчета количества повтор€ющихс€ элементов массива $password ипользоват функцию array_count_values($array)

    $repeat_symbols = array_count_values($password);
    foreach($repeat_symbols as $values)
    {
         if ($values > 1)
         {
              $total = $total - $values;     
         }
    }
    echo $total;
    //в production - готово!