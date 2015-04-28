<?php
    $directory = 'C:\\WebServers\\home\\localhost\\www\\data_users\\';
    if (isset($_GET))
    {
         $filename = fopen($directory.$_GET['email'].'.txt', 'w');
         foreach($_GET as $key => $value)
         {                  
              $key = str_replace('_', ' ', $key);	            
              $key_array = str_split($key);
              $key_array[0] = mb_convert_case($key_array[0], MB_CASE_UPPER);
              $key = implode($key_array);
              fwrite($filename, $key.': '.$value."\r\n");                   
         }
         fclose($filename);
    }