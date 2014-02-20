<?php

    extract($_REQUEST);
    
    $website = file_get_contents($siteUrl);

    echo($website);

?>