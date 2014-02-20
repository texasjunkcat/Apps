<?php

	echo "Sports";

    $siteUrl = "http://espn.go.com";

    extract($_REQUEST);
    
    $website = file_get_contents($siteUrl);

    echo($website);

?>