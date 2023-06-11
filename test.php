<?php
$url = "https://api.hnb.hr/tecajn-eur/v3?format=xml";
$fajl = file_get_contents($url);
$xml = simplexml_load_file($url) or die("feed not loading");
$pare = $xml->item[0]->drzava;
echo $pare;



function pretvori()
{
  if (isset($_POST['submit']) && isset($_POST['selektor']) && isset($_POST['novac'])) {
    $url = "https://api.hnb.hr/tecajn-eur/v3?format=xml";
    $xml = simplexml_load_file($url) or die("Nemogu ucitati XML datoteku");

    $odabir = $_POST['selektor'];
    $novac = $_POST['novac'];

    //echo "<script type='text/javascript'>alert('$odabir');</script>";

    $tecaj = $xml->item[(int)$odabir]->prodajni_tecaj;
    //$tecaj2 = $xml->item[(int)$odabir]->drzava;

    //echo "<script type='text/javascript'>alert('$tecaj');</script>";

    $cijenaEur = $novac * $tecaj;

    echo $cijenaEur;
  } else {
    echo "Odaberite valutu i unesite iznos";
  }
}



?>