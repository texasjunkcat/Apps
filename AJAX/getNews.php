<?php

	// extract($_REQUEST);

	// echo("news is ".$news);

	$siteUrl = 'http://news.search.yahoo.com/search;_ylt=AwrBEiJx1PpSKxMAsjLQtDMD;_ylc=X1MDNTM3MjAyNzIEX3IDMgRiY2sDMm5oMmdzMTliMmU2dSUyNmIlM0QzJTI2cyUzRDBmBGZyA3VoM19uZXdzX3ZlcnRfZ3MEZ3ByaWQDWEZSWFhnZWdTNGU4eF80VkExSEo5QQRtdGVzdGlkA251bGwEbl9yc2x0AzEEbl9zdWdnAzAEb3JpZ2luA25ld3Muc2VhcmNoLnlhaG9vLmNvbQRwb3MDMARwcXN0cgMEcHFzdHJsAwRxc3RybAMzNARxdWVyeQN0aXBzIG9uIG1ha2luZyBkb2N0b3IgYXBwb2ludG1lbnRzBHRfc3RtcAMxMzkyMTcwMTA2MzYzBHZ0ZXN0aWQDbnVsbA--?gprid=XFRXXgegS4e8x_4VA1HJ9A&pvid=CWYE6WKL7IorxFDgUrE43hUYRwT.x1L61HEABbfG&p=tips+on+making+doctor+appointments&fr2=sb-top&fr=uh3_news_vert_gs&type=2button';

	$website= file_get_contents($siteUrl);


            $results = explode('<li>', $website);

            for($i=0; $i < count($results); $i++){
                if($i < 6){

                }
                elseif ($i >= 6 && $i < 11){

                    echo('<div class="resultNew">');
                    echo($results[$i]); 

                    echo("</div>");
                }
                
            }


?>