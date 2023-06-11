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

<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<body>
<div id="myChart" style="width:75%; height:500px;"></div>

<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
// Set Data
var data = google.visualization.arrayToDataTable([
  ['Price', 'Size'],
  [50,7],[60,8],[70,8],[80,9],[90,9],
  [100,9],[110,10],[120,11]
]);
// Set Options
var options = {
  title: 'House Prices vs. Size',
  hAxis: {title: 'Square Meters'},
  vAxis: {title: 'Price in Millions'},
  legend: 'none'
};
// Draw
var chart = new google.visualization.LineChart(document.getElementById('myChart'));
chart.draw(data, options);
}
</script>

</body>
</html>