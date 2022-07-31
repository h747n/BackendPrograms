<?php

$amount = explode(" ", readline("lotfan gheymat kala ha ra ba joda kardan be sorat space vared konid : "), readline("lotfan tedad kala ha ra vared konid : "));

$sum = 0;
$temp = 0;
$tax = 0;

for ($i = 0; count($amount) > $i; $i++) {
    $sum = $sum + $amount[$i];
}
$temp = $sum * 9 / 100;
$tax = $temp + $sum;
print_r($tax);


