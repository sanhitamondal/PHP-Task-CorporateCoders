<?php

//input number of bread,vada and samosa
list($bread, $vada, $samosa) = explode(' ', readline());
$bread = (int)$bread;
$vada = (int)$vada;
$samosa = (int)$samosa;

//input price of vadapaw and samosapaw
list($vadapawPrice, $samosapawPrice) = explode(' ', readline());

$vadapawPrice = (int)$vadapawPrice;
$samosapawPrice = (int)$samosapawPrice;

$vadapawCount = 0;
$samosapawCount = 0;

//main logic
if($samosapawPrice > $vadapawPrice) {
    while($bread >= 2 && $samosa >= 1) {
        $bread = $bread - 2;
        $samosa--;
        $samosapawCount++;
        
    }
    while($bread >= 2 && $vada >= 1) {
        $bread = $bread - 2;
        $vada--;
        $vadapawCount++;
        
    }
}
else
{
    while($bread >= 2 && $vada >= 1) {
        $bread = $bread - 2;
        $vada--;
        $vadapawCount++;
        
    }
    while($bread >= 2 && $samosa >= 1) {
        $bread = $bread - 2;
        $samosa--;
        $samosapawCount++;
        
    }
}
//calculate total price
$total = $vadapawCount*$vadapawPrice + $samosapawCount*$samosapawPrice;

echo $total;

?>
