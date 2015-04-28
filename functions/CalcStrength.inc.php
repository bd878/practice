<?php
    //Â ÏĞÎÄÀÊØÍ
    function CalcStrength($password)
    {
         $strength = 0;
         $strength += CalcLengthStrength($password);      
         $strength += CalcDigitStrength($password);
         $strength += CalcUpperStrength($password);
         $strength += CalcLowerStrength($password);
         $strength += CalcOnlyCharStrength($password);
         $strength += CalcOnlyDigitStrength($password);
         $strength += CalcRepeatedStrength($password);  
         
         return $strength;
    } 
     
     
    function CalcLengthStrength($password)
    {
         return 4 * strlen($password);
    }

    function CalcDigitStrength($password)   
    {
         $numbers = 0;
         for($i = 0; $i < strlen($password); $i++)
         {
              if(ctype_digit($password[$i]))
              {
                   $numbers++;	
              }
         }
         return 4 * $numbers;
    }

    function CalcUpperStrength($password)
    {
         $upper = 0;
         for($i = 0; $i < strlen($password); $i++)
         {
              if(ctype_upper($password[$i]))
              {
                   $upper++;
              }
         }
         return 2 * (strlen($password) - $upper);
    }

    function CalcLowerStrength($password)
    {
         $lower = 0;
         for($i = 0; $i < strlen($password); $i++)
         {
              if(ctype_lower($password[$i]))
              {
                   $lower++;
              }
         }
         return 2 * (strlen($password) - $lower);
    }

    function CalcOnlyCharStrength($password)
    {
         return ctype_alpha($password) ? (-1) * strlen($password) : 0;
    }

    function CalcOnlyDigitStrength($password)
    {
         return ctype_digit($password) ? (-1) * strlen($password) : 0;
    }

    function CalcRepeatedStrength($password)
    {
         $strength = 0;
         $symbols = count_chars($password, 1);
         foreach($symbols as $chCount)
         {
              if($chCount > 1)
              {
                   $strength -= $chCount;
              }
         }
         return $strength;
    } 
   
    