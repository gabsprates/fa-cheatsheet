<?php


$url = "https://fortawesome.github.io/Font-Awesome/cheatsheet/";

$html = file_get_contents($url);

$pega = explode("<div class=\"row\">", $html);
$pega = explode("<footer id=\"footer\" class=\"footer hidden-print\">", $pega[2]);

$pega = $pega[0];

$pega = "<div id=\"lista-fa\"><div><div>".$pega;
print_r($pega);

?>
