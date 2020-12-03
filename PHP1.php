<?php
//input number of server
$numberOfServer = (int)readline();

//input load per minute in an array
$loadArray = explode(' ', readline());

//loop through array and apply conditions
forEach($loadArray as $load) {
    if((int)$load < 50 ) {
        $numberOfServer = floor($numberOfServer / 2);
    }
    else {
        $numberOfServer = floor($numberOfServer*2 + 1);
    }
}
echo $numberOfServer;
?>
