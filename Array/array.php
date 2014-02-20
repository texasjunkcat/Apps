<?php

    //this will display the html from another website

	extract($_REQUEST);

    $website = file_get_contents($siteUrl);

    echo($website)



?>