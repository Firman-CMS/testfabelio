<?php

function getCurl($productId)
{
    $url = 'https://fabelio.com/insider/data/product/id/'.$productId;
    $ch = curl_init(); 

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    $output = curl_exec($ch); 

    curl_close($ch);      

    return $output;
}