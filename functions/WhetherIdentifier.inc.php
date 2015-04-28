<?php
    //symbols -  цифры и буквы
    function WhetherIdentifier($identifier)
    {
        $identifier = WhetherSymbols($identifier);
        if ($identifier == 'yes')
        {
             $identifier = WhetherNotFirstNumber($identifier); 
             echo '<br>'.$identifier;      
        }
        return $identifier;
    }
    
    function WhetherSymbols($identifier)
    {
         return (ctype_alnum($identifier)) ? 'yes' : 'no';    
    }

    function WhetherNotFirstNumber($identifier)
    {
          return (is_numeric($identifier)) ? 'no' : 'yes';     	
    }