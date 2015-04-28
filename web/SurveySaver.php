<?php                           
    $directory = 'C:\\WebServers\\home\\localhost\\www\\data\\';
    if (isset($_GET)) 
    {
         foreach($_GET as $key => $value)
         {
              if (file_exists($directory.$key.'.txt'))  //если файл по заданному ключу существует
              {                  
                  file_put_contents($directory.$key.'.txt', $value."\r\n", FILE_APPEND);	
              } else 
              {                                         
                   $file = fopen($directory.$key.'.txt', 'w');
                   fwrite($file, $value."\r\n");
                   fclose($file);                  
              }                                    
         }
    }