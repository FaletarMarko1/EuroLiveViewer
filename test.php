<?php
$url = "https://api.hnb.hr/tecajn-eur/v3?format=xml";
$fajl = file_get_contents($url);
$xml = simplexml_load_file($url) or die("feed not loading");
$pare = $xml->item[2]->drzava;
echo $pare;
?>