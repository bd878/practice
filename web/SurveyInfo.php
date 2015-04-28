<?php
    $directory = 'C:\\WebServers\\home\\localhost\\www\\data_users\\';
    if (isset($_GET))
    {
         $directory = $directory.$_GET['email'].'.txt';
         if (file_exists($directory))
         {
              $file = file($directory);
              foreach($file as $value)
              {
                   echo $value;
                   echo '<br>';
              }
         } else
         {
              echo 'no data about this user';
         }
    }