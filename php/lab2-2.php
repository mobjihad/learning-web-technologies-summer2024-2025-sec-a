<?php

$price_without_vat = 500 ; 
$vat_amount = 15 ; 

$vat_price = $price_without_vat* $vat_amount / 100 ; 

$final_price =  $price_without_vat + $vat_price ; 

echo "Final Price : {$final_price}" ;


?>