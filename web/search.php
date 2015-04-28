<?php
    $search = '';
    if (!empty($_GET['search']))
    {
      $search = $_GET['search'];  
    }
    $search = (isset($_GET['search'])) ? $_GET['search'] : '';
    echo $search;