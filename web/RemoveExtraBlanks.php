<?php
    $with = (isset($_GET['search'])) ? $_GET['search'] : ' ';
    $without;
    $i = 1;
    $with = trim($with);
    while ($i <= strlen($with))
    {       
         if ($with[$i] == ' ')
         {         
              while ($with[$i] == ' ')
              {
                   $i++;    
              }
              $without[] = ' ';
         }
         $without[] = $with[$i];
         $i++; 
    }
    echo '#' . $with . '#';
    
                                     