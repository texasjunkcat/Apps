<html>

<head>
    <style>
    .resultNew{
        font-size:6px;
        border-radius:10px;
        background-color:yellow;
    }

    .resultNew li{

        font-size:20px;
    }

    .tile {
        height: 300px;
        width: 300px;
        box-shadow: 10px 10px 10px #111;
        box-shadow: 10px 10px 10px #111;  
}

    </style>

</head>

<?php

    function scrapeIt($siteUrl){

            $website= file_get_contents($siteUrl);


            $results = explode('<li>', $website);

            for($i=0; $i < count($results); $i++){
                if($i<6){

                }
                else{

                    echo('<div class="resultNew">');
                    echo($results[$i]); 

                    echo("</div>");
                }
                
            }
            //return($website);

    }


    $googSite= scrapeIt('http://search.yahoo.com/search;_ylt=A0LEVyjQmfFSvy8AXIal87UF;_ylc=X1MDOTU4MTA0NjkEX3IDMgRiY2sDN2l2MWpzdDlmMzZlZyUyNmIlM0QzJTI2cyUzRGFiBGZyAwRncHJpZANWd01HOWUzOVNtZVJlUHFiaWRMMTJBBG10ZXN0aWQDbnVsbARuX3JzbHQDMARuX3N1Z2cDMTAEb3JpZ2luA3VzLnNlYXJjaC55YWhvby5jb20EcG9zAzAEcHFzdHIDBHBxc3RybAMEcXN0cmwDMTQEcXVlcnkDIm1pZ2h0eSBkdWNrcyIEdF9zdG1wAzEzOTE1NjUyNzA2NTkEdnRlc3RpZANudWxs?gprid=VwMG9e39SmeRePqbidL12A&pvid=PW8w2zk4LjEaP._6fOZgqA4DNzEuNFLxmdD_r4OI&p=%22mighty+ducks%22&fr=sfp&fr2=&iscqry=');
    //echo($googSite);

    


    


?>


</html>