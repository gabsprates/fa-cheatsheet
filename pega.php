<?php


$url = "http://fontawesome.io/cheatsheet/";

$cURL = curl_init();

curl_setopt_array($cURL, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url
));

$html = curl_exec($cURL);
curl_close($cURL);

$pega = explode("<div class=\"row\">", $html);
$pega = explode("<footer id=\"footer\" class=\"footer hidden-print\">", $pega[2]);

$pega = $pega[0];

$pega = "<div id=\"lista-fa\"><div><div>".$pega;
print_r($pega);

?>
