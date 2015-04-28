<?php
    require_once('C:\\WebServers\\home\\localhost\\www\\functions\\WhetherIdentifier.inc.php');
    $identifier = (isset($_GET['identifier'])) ? $_GET['identifier'] : ' ';
    $identifier = WhetherIdentifier($identifier);
    echo $identifier;
    
  
    

  
                                          